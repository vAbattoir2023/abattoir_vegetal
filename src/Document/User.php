<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class User
{
    #[MongoDB\Id]
    protected string $id;

    #[MongoDB\Field(type: 'string')]
    protected string $username;


    // #[MongoDB\Field(type: 'string')]
    // private string $email;

    // #[MongoDB\Field(type: 'string')]
    // private string $password;

    // #[MongoDB\Field(type: 'string')]
    // private string $gender;

    // #[MongoDB\Field(type: 'string')]
    // private string $role;

    // #[MongoDB\Field(type: 'string')]
    // private string $image;

    // #[MongoDB\Field(type: 'string')]
    // private string $birthdate;

    // #[MongoDB\Field(type: 'string')]
    // private string $job;

    // #[MongoDB\Field(type: 'string')]
    // private string $description;


    public function getId(): string
    {
        return $this->id;
    }

    public function getUserName(): string
    {
        
        return $this->username;
    }

    public function setUserName(string $username): User
    {
        $this->username = $username;

        return $this;
    }

}