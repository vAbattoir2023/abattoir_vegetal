<?php

namespace App\Tests\Functional;

use App\Document\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserDocument extends KernelTestCase
{
    
    protected static function createKernel(array $options = []): \Symfony\Component\HttpKernel\Kernel
    {
        // Replace App\Kernel with the actual namespace of your kernel class
        return new \App\Kernel('test', true);
    }
    

    public function getDocument(): User
    {
        return (new User())
            ->setUserName('Test#1')
            ->setCity(95200)
            ->setAge(25)
            ->setGender('Men')
            ->setDescription('a dream test')
            ->setJob('TestMan')
            ->setDiet('vegan')
            ->setCenterOfInterestPerso('Symfonytest personal description')
            ->setEmail('test@test.com')
            ->setPassword('12345')
            ->setCenterOfInterest(['Game']); 
    }


    public function testDocumentValid(): void
    {
        // Boot the kernel to set up the Symfony environment
        self::bootKernel();

        // Get the Symfony container for accessing services
        $container = static::getContainer();

        // Create a new User object and set its properties
        $user = $this->getDocument();
        // Validate the User object using the Symfony validator
        $errors = $container->get('validator')->validate($user);

        // Check that there are no validation errors
        $this->assertCount(0, $errors);

    }
    
    public function testAge()
    {
        self::bootKernel();
        $container = static::getContainer();

        $user = $this->getDocument();
        $user->setAge(12); 
        // $user->setAge('12'); 

        $errors = $container->get('validator')->validate($user);

        // Check that there is at least one validation error
        $this->assertCount(0, $errors);
    }

    public function testCenterOfInterest()
    {
        self::bootKernel();
        $container = static::getContainer();

        $user = $this->getDocument();
        // Set multiple center of interest values
        $user->setCenterOfInterest(['Game']); 

        $errors = $container->get('validator')->validate($user);

        // Check that there is at least one validation error
        $this->assertCount(0, $errors);
    }
}
