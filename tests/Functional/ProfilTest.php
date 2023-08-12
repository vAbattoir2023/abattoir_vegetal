<?php

namespace App\Tests\Functional;


use App\Document\User; // Use the correct namespace for your MongoDB Document class
use Doctrine\ODM\MongoDB\DocumentManager; // Import the DocumentManager class
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfilTest extends WebTestCase
{
    
    public function testInsertDataUser(): void
    {
        $client = static::createClient();

        $documentManager = $client->getContainer()->get(DocumentManager::class); // Use the DocumentManager class for MongoDB

       
            // Create a user object for testing
            $user = new User();
            $user->setUserName('admintest');
            $user->setCity('95200');
            $user->setAge(88);
            // ... set other properties
    
            // Persist and flush the user object
            $documentManager->persist($user);
            $documentManager->flush();
    
            // Retrieve the user object from the database
            $persistedUser = $documentManager->getRepository(User::class)->findOneBy(['username' => 'admintest']);
    
            // Assert that the user data is correctly persisted
            $this->assertInstanceOf(User::class, $persistedUser);
            $this->assertSame('95200', $persistedUser->getCity());
            $this->assertSame(88, $persistedUser->getAge());

    }


        
}
