<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class User
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $userName;

    #[MongoDB\Field(type: 'string')]
    private string $email;

    #[MongoDB\Field(type: 'string')]
    private string $password;


    public function getId(): string
    {
        return $this->id;
    }

    public function getCity(): string
    {
        return $this->userName;
    }

    public function getFirstName(): string
    {
        return $this->email;
    }

    public function getLastName(): string
    {
        return $this->password;
    }

    public function setUserName(string $userName): User
    {
        $this->userName = $userName;

        return $this;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;

        return $this;
    }
}