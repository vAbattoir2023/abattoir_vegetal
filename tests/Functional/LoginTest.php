<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class LoginTest extends WebTestCase
{
// test connexion 
    public function testIfLoginSuccess(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

       /** @var UrlGeneratorInterface $urlGenerator */
       $urlGenerator = $client->getContainer()->get("router");

       $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

       // form
       $form = $crawler->filter("form[name=login]")->form([
        "login[email]" => "admin@gmail.com",
        "login[password]" => "admin"
    ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);

        $client->followRedirect();

        $this->assertRouteSame('app_user_profil_success');
    }

    // test connexion mauvais mot de passe
    public function testIfLoginPasswordWrong(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

       $urlGenerator = $client->getContainer()->get("router");

       $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

       // form
       $form = $crawler->filter("form[name=login]")->form([
        "login[email]" => "admin@gmail.com",
        "login[password]" => "admin1581"
    ]);

        $client->submit($form);

        $this->assertSelectorTextContains("div.alert","Mot de passe invalide. Veuillez réessayer.");
    }

}

