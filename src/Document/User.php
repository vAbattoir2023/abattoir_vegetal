<?php

namespace App\Document;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class User
{
    #[MongoDB\Id]
    protected string $id;

    // REGISTRATION SLIDE 1
    #[MongoDB\Field(type: 'string')]
    protected string $username;

    #[MongoDB\Field(type: 'string')]
    protected string $city;

    // #[MongoDB\Field(type: 'string')]
    // protected string $birthdate;

    #[MongoDB\Field(type: 'int')]
    protected int $age;

    #[MongoDB\Field(type: 'string')]
    protected string $gender;

    #[MongoDB\Field(type: 'string')]
    protected string $language;

    #[MongoDB\Field(type: 'string')]
    protected string $image;

    #[MongoDB\Field(type: 'string')]
    protected string $job;

    #[MongoDB\Field(type: 'string')]
    protected string $description;

    #[MongoDB\Field(type: 'string')]
    protected string $diet;

    // REGISTRATION SLIDE 2
    #[MongoDB\Field(type: 'string')]
    protected string $centerOfInterestPerso;

      /**
     * @MongoDB\Field(name="centerOfInterest", type="collection")
     */
    protected array $centerOfInterest;

    // #[MongoDB\Field(type: 'string')]
    // private string $email;

    // #[MongoDB\Field(type: 'string')]
    // private string $password;

    // #[MongoDB\Field(type: 'string')]
    // private string $role;


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
    
    public function getCity(): string
    {
        
        return $this->city;
    }

    public function setCity(string $city): User
    {
        $this->city = $city;

        return $this;
    }
    
    public function getAge(): int
    {
        
        return $this->age;
    }

    public function setAge(int $age): User
    {
        $this->age = $age;

        return $this;
    }

    //BIRTHDAY
    // public function getBirthday(): DateTime
    // {
        
    //     return DateTime::createFromFormat('Y-m-d', $this->birthdate);
    // }

    
    // public function setBirthday(DateTime  $birthdate): User
    // {
    //     if ($birthdate !== null) {
    //         $this->birthdate = $birthdate->format('Y-m-d');
    //     }

    //     return $this;
    // }


    public function getGender(): string
    {
        
        return $this->gender;
    }

    public function setGender(string $gender): User
    {
        $this->gender = $gender;

        return $this;
    }

    public function getLanguage(): string
    {
        
        return $this->language;
    }

    public function setLanguage(string $language): User
    {
        $this->language = $language;

        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): User
    {
        $this->image = $image;

        return $this;
    }


    //DESCRIPTION
    public function getDescription(): string
    {
        
        return $this->description;
    }

    
    public function setDescription(string $description): User
    {
        $this->description = $description;

        return $this;
    }



    //JOB
    public function getJob(): string
    {
        
        return $this->job;
    }

    
    public function setJob(string $job): User
    {
        $this->job = $job;

        return $this;
    }



  //DIET
    public function getDiet(): string
    {
        
        return $this->diet;
    }

     public function setDiet(string $diet): User
     {
         $this->diet = $diet;
 
         return $this;
     }

      //CENTEROFINTEREST-PERSO
    public function getCenterOfInterestPerso(): string
    {
        
        return $this->centerOfInterestPerso;
    }

    public function setCenterOfInterestPerso(string $centerOfInterestPerso): User
    {
        $this->centerOfInterestPerso = $centerOfInterestPerso;

        return $this;
    }

    //CENTEROFINTEREST-avec multi choix
    public function getCenterOfInterest(): array
    {
        
        return $this->centerOfInterest;
    }

    public function setCenterOfInterest(array $centerOfInterest): User
    {
        $this->centerOfInterest = $centerOfInterest;

        return $this;
    }


}