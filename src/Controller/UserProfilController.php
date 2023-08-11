<?php

namespace App\Controller;

use App\Document\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Service\CloudinaryService;
use Cloudinary\Api\Upload\UploadApi;
use DateTime;

#[Route('/user_profil')]
class UserProfilController extends AbstractController
{
    #[Route('/edit', name: 'app_user_profil')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
    {

        $user  = new User();
        
        // get id user from session
        $idSession = $sessionInterface->get('id');

        if(!$idSession){
            return $this->redirectToRoute('app_home');
        }
        // get user by id session 
        $user = $userRepository->findUserById($idSession);
        // if not user then redirect to app_register
        if (!$user) {
            return $this->redirectToRoute('app_register');
        }

        // create form for the database
        $form = $this->createForm(UserType::class, $user);
        // get the data from form
        $form->handleRequest($request);

        // if data from form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {


// //////////////////////////////////////////////////////////////////////////////////// STEP POSTAL CODE
//              // Retrieve the postal code from the form
//              $codePostal = $user->getPostalCode();
//              $codeDepartement = $user->getCodeDepartement();
 
//              // Basic URL to the government API for obtaining commune information from a postal code
//              $apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal;
            
//              $httpClient = HttpClient::create();
//              // Make an HTTP GET request to the API using the URL you've built
//              $response = $httpClient->request('GET', $apiUrl);
//              $data = $response->toArray();
 
//              if (!empty($data)) {
//                  // Update the city value according to the municipality found
//                  $city = $data[0]['nom'];
//                  // Assign values to USER document                
//                  $user->setCity($city);
//                  $user->setPostalCode($codePostal);
//                  // Retrieve the department code from the API's Department code data
//                  $codeDepartement = $data[0]['codeDepartement'];
//                  // Assign values to USER document
//                  $user->setCodeDepartement($codeDepartement);
                
//              }
//              // Retrieve department code from commune data
//              $codeDepartement = $user->getCodeDepartement();
 
//              // Basic URL to the government API to obtain department information from the department code
//              $apiUrl = "https://geo.api.gouv.fr/departements/" . $codeDepartement;
 
//              // Make an HTTP GET request to the API using the constructed URL
//              $response = $httpClient->request('GET', $apiUrl);
//              $data = $response->toArray();
 
//              if (!empty($data)) {
//                  // Retrieve department name from API response
                
//                  $codeRegion = $data['codeRegion'];
//                   // Use department name to retrieve region name
//                  $apiUrl = "https://geo.api.gouv.fr/regions/" . $codeRegion;
//                  // Make an HTTP GET request to the API using the URL you've built
//                  $response = $httpClient->request('GET', $apiUrl);
//                  $data = $response->toArray();
 
//                  if (!empty($data)) {
//                      // Update the value of region according to the name of the region found
//                      $region = $data['nom'];
//                      // Assign value to USER document
//                      $user->setRegion($region);
//                  }
//              }

            //update the data to user in database
            $userRepository->save($user, true);
            // Redirect to success page
            return $this->redirectToRoute('app_user_profil_success');
        }

       return $this->render('user_profil/index.html.twig', [
            // send form for database
             'UserForm' => $form->createView(),
        ]); 
    }

    #[Route('/profil', name: 'app_user_profil_success')]
    public function success( UserRepository $userRepository, SessionInterface $sessionInterface): Response
    {
        // get id user from session
        $idSession = $sessionInterface->get('id');

        if(!$idSession){
            return $this->redirectToRoute('app_home');
        }

        // get document user from database
        $userFromBdd = $userRepository->findUserById($idSession);

        return $this->render('user_profil/profil.html.twig', [
            // send data user from database
            'user' => $userFromBdd,
        ]);
    }

   


}