<div id="" align="center">
  <img src="./public/assets/img/logo/abattoir-vegetal-logo-small-light.svg" alt="Logo Abattoir Végétal" width="50%" />
</div>

<br>

<p> L'objectif de ce projet de fin de formation, étais de répondre à une problématique posée par les végétariens, qui ne trouvent pas toujours de personnes pour partager un repas avec eux. Afin de remédier à cela, nous avons créé un espace de réservation pour le restaurant végétalien "L'Abattoir Végétal". Désormais, les utilisateurs ont la possibilité d'inviter d'autres personnes inscrites en fonction de leurs centres d'intérêt.</p>


# Prérequis

  * PHP 8.0.2
  * MongoDB
  * Symfony version 6.0.

Bundle utilisé dans le projet : 

- MongoDB [Documentation Doctrine MongoDB ](https://www.doctrine-project.org/projects/doctrine-mongodb-bundle/en/4.4/installation.html#installation) 
- Twig [Documentation Twig](https://twig.symfony.com/doc/2.x/installation.html)
  
API utilisé dans le projet : 

- [country flag icons][1]
- [random user][2]
- [geo.api.gouv.fr][3]


# Installation

Cloné le projet avec la commande

```bash
https://github.com/vAbattoir2023/abattoir_vegetal.git
```

Ensuite, dans l'ordre taper les commandes dans votre terminal : 

```bash
composer install
symfony server:start -d
```

## Création de Groupe

Le processus pour la création d'un groupe implique la sélection d'amis à inviter grâce aux filtres de centres d'intérêts, la spécification d'une date de réservation, et la création effective du groupe.
Afin de créée un groupe nous utiliseront le ```Controller/Groupcontroller.php``` et le javascript ```js/creatGroupe.js```.

* Affichage de la Liste d'Utilisateurs avec Filtres

Lorsque les utilisateurs accèdent à la page de création de groupe, une liste d'utilisateurs est affichée, initialement sans filtres. Les utilisateurs peuvent alors choisir de filtrer cette liste en fonction de différents centres d'intérêt.

**createGroup.js**
```
let url = '/group/users-list/';

let filtersStr = '';    // initialise the filter string

// loop on the keys from filters array
Object.keys(filters).forEach(elName => {
  if (filters[elName]) {
    let filter = document.getElementById(elName).dataset['filter']; // get all data from filter
    filtersStr += (filtersStr == '') ? filter : '#' + filter;       // add the filter data to the filtersStr
  }
});

url += filtersStr; // concatenates url + filtersStr
```

Ensuite, une requête fetch est effectuez à cette URL pour récupérer la liste filtrée d'utilisateurs.

```
   let idUsers = []; // initialise the ID users selected array

fetch(url)                                // fetch ('/group/users-list/')
 .then(response => response.text())     // return the response in text format
// rename response to html
 .then(html => {
    document.querySelector('#allUsers').innerHTML = html;    // get container users and add html data
```
Lorsque les utilisateurs cochent les cases des filtres, la liste d'utilisateurs est automatiquement mise à jour en fonction des filtres sélectionnés
```
myCheckboxes.forEach(checkBox => {
  // ...

  checkBox.addEventListener('click', (e) => {
    filters[e.currentTarget.id] = e.target.checked;
    refreshUsersSuggestion();
  });
});
```

Dans ```Controller/Groupcontroller.php```, la function ```showUsersList()```  prend en compte les filtres et récupère les utilisateurs correspondants à ces filtres., la partie importante est l'utilisation de la méthode  ```field('centerOfInterest')->in($filters) ``` qui permet de filtrer les utilisateurs en fonction de leurs centres d'intérêt.

**GroupController.php**
```
#[Route('/users-list/{filters}', name: 'app_get_users_list_from_filters')]
public function showUsersList(string $filters, DocumentManager $dm): Response
{
    $users = [];
    $filters = explode(',', $filters);

    $iter = $dm->createQueryBuilder()
        ->find(User::class)
        ->field('centerOfInterest')->in($filters)
        ->getQuery()
        ->execute();

     $users = [];
     while($iter->valid()) {
            $users[] = $iter->current();
            $iter->next();
        }

        return $this->render('Group/usersList.html.twig',[
            'users' => $users
        ]);
    }
}
```

## Réservation 
la fonction ```allReservations``` du controller ```ReservationController.php ``` récupère toutes les réservations associées à l'utilisateur actuellement connecté. Elle récupère les groupes où l'utilisateur est invité en attente, a accepté ou a refusé, ainsi que les groupes dont l'utilisateur est administrateur. Les réservations sont triées par date de création du groupe.

* Récupération des groupes
la méthode ```findGuestById``` du ```GroupRepository``` pour récupérer tous les groupes pour lesquels l'utilisateur est invité

**ReservationController.php**
```
// find all the groups for which I'm a guest
$guest = $groupRepository->findGuestById($idSession, 'waiting');

// find all the groups I've refused
$declin = $groupRepository->findGuestById($idSession, 'refuse');

// find all the groups I've accepted
$accept = $groupRepository->findGuestById($idSession, 'accept');

```
* Préparation des réservations
Chaque boucle ```foreach``` parcourt les groupes correspondants (acceptés, refusés, invités en attente, administrateur) et ajoute chaque élément au tableau ```
$allReservation```
.
```
$allReservation = [];       // initialise an array of all my reservations

foreach($accept as $guestAccept){
    array_push($allReservation, $guestAccept);
}
foreach($declin as $guestDeclin){
    array_push($allReservation, $guestDeclin);
}
foreach($guest as $guestToMe){
    array_push($allReservation, $guestToMe);
}
foreach($authors as $guestAuthors){
    array_push($allReservation, $guestAuthors);
}
```
## Administration - Gestion des Utilisateurs/Groupes et test API
La partie Admin permet la gestion des utilisateurs( affichage/modification/supression ), la gestion de tous les groupes crées ainsi que de créés des utilisateurs avec les API.<br>
Accéder à ces fonctionnalités, un utilisateur doit avoir le ```[ROLE_ADMIN]```. 

* Modification d'un Profil Utilisateur

```
 $userFromBdd = $userRepository->findUserById($id);

// create form for the database
$form = $this->createForm(UserType::class, $userFromBdd);
// get the data from form
$form->handleRequest($request);

// if data from form is submitted and valid
if ($form->isSubmitted() && $form->isValid()) {
    //update the data to user in database
    $userRepository->save($userFromBdd, true);
    // Redirect to success page
    return $this->redirectToRoute('app_admin_index');
}

```
* Suppression d'un Profil Utilisateur
La vérification du token CSRF est effectuée, et le profil utilisateur est supprimé de la base de données
```
    $userFromBdd = $userRepository->findUserById($id);
    
    if ($this->isCsrfTokenValid('delete'.$userFromBdd->getId(), $request->request->get('_token'))) {
        $userRepository->removeByDocument($userFromBdd, true);
    }

```

* API
* Récupération d'Informations de Commune à partir du Code Postal [geo.api.gouv][3]<br>
Lors de la soumission du formulaire, le contrôleur récupère les informations de commune à partir du code postal fourni par l'Admin. Il utilise une API gouvernementale pour obtenir des informations sur la commune.


**ApiUserController.php**
```
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
```
Ensuite sont récupèré les informations de région à partir du code postal de l'utilisateur. 
```
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
```

**ApiUserType.php**
```
 ->add('postalCode', TextType::class, [
            'attr' => [
                'placeholder' => 'Zip Code',
            ],
            'constraints' => [
                new Length(['min' => 5, 'max' => 5, 'exactMessage' => 'Le code postal doit comporter 5 chiffres.']),
                new Regex([
                    'pattern' => self::REGEX_DEPARTEMENT_CODE,
                    'message' => 'Le code postal n\'est pas valide.',
                ]),
            ],
        ])
```

## Auteurs
Développeurs :
* Ezechiel _Github_ [@ezeflt](https://github.com/ezeflt)
* Wilfried  _Github_  [@86Wilfried](https://github.com/86Wilfried)
* Matthieu  _Github_ [@matthCorvo](https://github.com/matthCorvo)
* Cyril _Github_  [@swisslson](https://github.com/swisslson)
* Chedli  _Github_  [@rwine-T](https://github.com/rwine-T)

Désigners :
* Alice  _Behance_  [@alicehurault](https://www.behance.net/alicehurault) 
* Alexis  _Behance_  [@apiot152938e](https://www.behance.net/apiot152938e) 
* Violette  _Behance_  [@violettekristy2](https://www.behance.net/violettekristy2) 
* Camille  _Behance_   [@camillefornes1](https://www.behance.net/camillefornes1)



[1]: https://www.countryflagicons.com
[2]: https://randomuser.me/api/
[3]: https://geo.api.gouv.fr/
