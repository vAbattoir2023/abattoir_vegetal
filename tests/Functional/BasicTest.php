<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasicTest extends WebTestCase
{
    protected static function createKernel(array $options = []): \Symfony\Component\HttpKernel\Kernel
    {
        // Replace App\Kernel with the actual namespace of your kernel class
        return new \App\Kernel('test', true);
    }

    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }
}
