<?php

namespace App\Document;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Reservation
{
    #[MongoDB\Id]
    protected string $id;

    // REGISTRATION SLIDE 1
    #[MongoDB\Field(type: 'string')]
    protected string $username;


    public function getUserName(): string
    {
        
        return $this->username;
    }
}