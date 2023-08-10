<?php

namespace App\Controller;

use App\Document\User;
use App\Form\ApiUserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class ApiUserController extends AbstractController
{
    #[Route('/api_user', name: 'app_api_user', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        // Instantiation of the USER class
        $apiuser = new User();
        // Creating an array with the values from the $apiuser variable
        $form = $this->createForm(ApiUserType::class, $apiuser);
        // The handleRequest function manages the form input processing
        $form->handleRequest($request);
        // This condition checks IF the form has been submitted and IF validation rules are met
        if ($form->isSubmitted() && $form->isValid()) {

            $selectedLanguages = $form->get('language')->getData();
            $flagIconUrl = [];
            if (is_array($selectedLanguages)) {
                // Set the value of the "language" property
                $apiuser->setLanguage($selectedLanguages);
                // Base URL for flag icons API
                $flagIconsBaseUrl = 'https://www.countryflagicons.com/SHINY/32/';

                foreach ($selectedLanguages as $languageCode) {
                    $languageCodeUpper = strtoupper($languageCode);
                    // IF the corresponding flag exists in the $languageFlags array
                    if (isset($languageCodeUpper)) {
                        $flagIconUrl[] = $flagIconsBaseUrl . $languageCodeUpper . '.png';
                    } else {
                        // ELSE the flag for a language is not available, you can set a generic URL or a default URL
                        echo '  the flag for a language is not available  ';
                    }
                }
                    $apiuser->setFlagIconUrl($flagIconUrl);
                } else {
                    echo '  empty  ';
            }

            // API URL
            $apiUrl = 'https://randomuser.me/api/';

            // Create an HTTP client
            $httpClient = HttpClient::create();

            // Perform an HTTP GET request to the API
            $response = $httpClient->request('GET', $apiUrl);

            // Process the JSON response into an associative array
            $data = $response->toArray();

            // IF the variable $data is defined and IF $data contains the 'results' array
            if ($data && isset($data['results'])) {
                // THEN assign the variable $results to the first element of the 'results' array
                $results = $data['results'][0];

                // Check IF the data is present in the API response
                if (isset($results['gender'], $results['email'], $results['picture'], $results['login']['username'], $results['dob']['age'])) {

                    // Retrieve values from the $results array
                    $gender = $results['gender'];
                    $email = $results['email'];
                    $age = $results['dob']['age'];
                    $image = $results['picture']['large'];
                    $username = $results['login']['username'];


                    if ($gender === 'female') {
                        $gender = 'femme';
                    } elseif ($gender === 'male') {
                        $gender = 'homme';
                    }

                    // Assign values to the USER document
                    $apiuser->setGender($gender);
                    $apiuser->setEmail($email);
                    $apiuser->setAge($age);
                    $apiuser->setImage($image);
                    $apiuser->setUserName($username);
                }
            }

            // Retrieve the postal code from the form
            $codePostal = $apiuser->getPostalCode();
            $codeDepartement = $apiuser->getCodeDepartement();

            // Base URL for government API to get commune information from a postal code
            $apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal;

            // Perform an HTTP GET request to the API using the constructed URL
            $response = $httpClient->request('GET', $apiUrl);
            $data = $response->toArray();

            if (!empty($data)) {
                // Update the value of city based on the found zip code
                $city = $data[0]['nom'];
                // Assign values to the USER document               
                $apiuser->setCity($city);
                $apiuser->setPostalCode($codePostal);
                // Retrieve the department code from the API's codeDepartement data
                $codeDepartement = $data[0]['codeDepartement'];
                // Assign values to the USER document
                $apiuser->setCodeDepartement($codeDepartement);
               
            }
            // Retrieve the department code from the commune data
            $codeDepartement = $apiuser->getCodeDepartement();

            // Base URL for government API to get department information from the department code
            $apiUrl = "https://geo.api.gouv.fr/departements/" . $codeDepartement;

            // Perform an HTTP GET request to the API using the constructed URL
            $response = $httpClient->request('GET', $apiUrl);
            $data = $response->toArray();

            if (!empty($data)) {
                // Retrieve the department name from the API response
                $codeRegion = $data['codeRegion'];
                //  Use the department name to retrieve the region name
                $apiUrl = "https://geo.api.gouv.fr/regions/" . $codeRegion;
                // Perform an HTTP GET request to the API using the constructed URL
                $response = $httpClient->request('GET', $apiUrl);
                $data = $response->toArray();

                if (!empty($data)) {
                    // Update the value of region based on the found region name
                    $region = $data['nom'];
                    // Assign the value to the USER document
                    $apiuser->setRegion($region);
                }
            }

            // Save the updated User entity to the database
             $userRepository->save($apiuser, true);

            // Redirect to the 'app_api_user' route after saving
            return $this->redirectToRoute('app_api_user', [], Response::HTTP_SEE_OTHER);
        }

        // Return the rendered form (apiuser.html.twig) in HTML format
        // with ApiUser data from the $apiuser variable and values assigned to $form
        return $this->render('Admin/apiuser.html.twig', [
            'apiuser' => $apiuser,
            'form' => $form->createView(),
        ]);
    }
}
