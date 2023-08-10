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

- EasyAdmin              [Documentation EasyAdmin](https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html) 
- Swift Mailer           [Documentation Swift Mailer](https://symfony.com/doc/current/email.html) 
- VichUploaderBundle     [Documentation VichUploaderBundle](https://symfony.com/doc/2.x/bundles/EasyAdminBundle/integration/vichuploaderbundle.html)
- KnpPaginatorBundle     [Documentation KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle) 
- DoctrineFixturesBundle [Documentation DoctrineFixturesBundle](https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html) 

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


## Profil Utilisateur

Le contrôleur ```Controller/UserProfilcontroller.php``` traite les données soumises du formulaire, met à jour les informations de l'utilisateur et effectue des actions spécifiques avec des API.

* Exemples utilisation d'une API
* Drapeaux en fonction de la langue parlé avec [countryflagicons][1]<br>
Lors de la soumission du formulaire, le contrôleur traite la langue sélectionnée par l'utilisateur.
Il récupère les codes de langue sélectionnés dans le```Form/UserType.php``` et génère des URL pour afficher les drapeaux de langue correspondants à partir d'une source externe.

**UserType.php**
```
 ->add('language', ChoiceType::class, [
                'choices' => [
                    'English' => 'GB',
                    'French' => 'FR',
                ]
```
**UserController.php**
```
$selectedLanguages = $form->get('language')->getData();
$flagIconUrl = [];

if (is_array($selectedLanguages)) {
    $flagIconsBaseUrl = 'https://www.countryflagicons.com/SHINY/32/';

    foreach ($selectedLanguages as $languageCode) {
        if (isset($languageCode)) {
            $flagIconUrl[] = $flagIconsBaseUrl . $languageCode . '.png';
        } else {
            $flagIconUrl[] = $flagIconsBaseUrl . 'unknown.png';
        }
    }
    $user->setFlagIconUrl($flagIconUrl);
}
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


## Réservation 






## Versions

**Version** 0.0.1

**Version DJANGO** Le projet est également disponible avec le [framework python DJANGO ](https://github.com/Abdellah-Sk/myp-django) 

## Auteurs
Développeurs :
* Ezechiel _alias_  [@Rocalinecht](https://github.com/Rocalinecht)
* Wilfried  _alias_  [@Rocalinecht](https://github.com/Rocalinecht)
* Matthieu  _alias_ [@DimitriKft](https://github.com/DimitriKft)
* Cyril  _alias_  [@Rocalinecht](https://github.com/Rocalinecht)
* Chedli  _alias_  [@Abdellah-SK](https://github.com/Abdellah-Sk)

Désigner :
* Alice https://www.behance.net/alicehurault
* Alexis https://www.behance.net/apiot152938e
* Violette  https://www.behance.net/violettekristy2
* Camille https://www.behance.net/camillefornes1



[1]: https://www.countryflagicons.com
[2]: https://symfony.com/doc/current/setup.html#technical-requirements
[3]: https://symfony.com/doc/current/setup/web_server_configuration.html
[4]: https://symfony.com/download
[5]: https://symfony.com/book
[6]: https://getcomposer.org/
