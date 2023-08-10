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

Le contrôleur ```/UserProfilcontroller``` traite les données soumises du formulaire, met à jour les informations de l'utilisateur et effectue des actions spécifiques avec des API.

* Utilisation des API
* Drapeaux en fonction de la langue parlé avec [countryflagicons][1]<br>
Lors de la soumission du formulaire, le contrôleur traite la langue sélectionnée par l'utilisateur.
Il récupère les codes de langue sélectionnés dans le```/UserType``` et génère des URL pour afficher les drapeaux de langue correspondants à partir d'une source externe.

**UserType**
```
 ->add('language', ChoiceType::class, [
                'choices' => [
                    'English' => 'GB',
                    'French' => 'FR',
                ]
```
**UserController**
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

*  Récupération d'Informations de Commune à partir du Code Postal
Le contrôleur récupère les informations de commune à partir du code postal fourni par l'utilisateur. Il utilise une API gouvernementale pour obtenir des informations sur la commune.

```
$codePostal = $user->getPostalCode();
$apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal;

$httpClient = HttpClient::create();
$response = $httpClient->request('GET', $apiUrl);
$data = $response->toArray();

if (!empty($data)) {
    $city = $data[0]['nom'];
    $user->setCity($city);
    $user->setPostalCode($codePostal);
    $codeDepartement = $data[0]['codeDepartement'];
    $user->setCodeDepartement($codeDepartement);
}
```
Le contrôleur construit une URL pour l'API gouvernementale en fonction du code postal. Il effectue ensuite une requête HTTP GET à cette API pour obtenir les informations de la commune associée au code postal. Si des données sont renvoyées, il met à jour les informations de la commune et le département de l'utilisateur.

Étape 3: Récupération d'Informations de Région à partir du Code Département
Dans cette section, le contrôleur récupère les informations de région à partir du code département de l'utilisateur. Il utilise une autre API gouvernementale pour obtenir des informations sur la région correspondant au code département.

php
Copy code
$apiUrl = "https://geo.api.gouv.fr/departements/" . $codeDepartement;
$response = $httpClient->request('GET', $apiUrl);
$data = $response->toArray();

if (!empty($data)) {
    $codeRegion = $data['codeRegion'];
    $apiUrl = "https://geo.api.gouv.fr/regions/" . $codeRegion;
    $response = $httpClient->request('GET', $apiUrl);
    $data = $response->toArray();

    if (!empty($data)) {
        $region = $data['nom'];
        $user->setRegion($region);
    }
}
Le contrôleur utilise le code département récupéré précédemment pour construire une URL vers l'API gouvernementale correspondante. Il fait ensuite une autre requête HTTP GET pour obtenir les informations de la région associée au code département. Si des données sont renvoyées, il met à jour les informations de région de l'utilisateur.

Conclusion
En utilisant ces étapes, le contrôleur effectue des appels à des API externes pour enrichir les informations de profil de l'utilisateur, telles que les drapeaux de langue, la commune et la région. Cela permet d'améliorer la qualité et la précision des informations stockées dans la base de données de l'application, offrant ainsi une meilleure expérience utilisateur.



## Réservation 


## Création de groupes 



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
