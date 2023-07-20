<?php

namespace App\Document;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
// use Doctrine\ODM\MongoDB\Mapping\Annotations\EmbedOne;
use Symfony\Component\Validator\Constraints\Date;


#[MongoDB\Document]
class User
{
    #[MongoDB\Id]
    public string $id;

    #[MongoDB\Field(type: 'string')]
    public ?string $username = '';

    #[MongoDB\Field(type: 'string')]
    public string $email;

    // REGISTRATION SLIDE 1
    #[MongoDB\Field(type: 'string')]
    public string $password;

    #[MongoDB\Field(type: 'string')]
    public ?string $city = null;

    #[MongoDB\Field(type: 'int')]
    public ?int $age = null;

    #[MongoDB\Field(type: 'string')]
    public ?string $gender = null;

    #[MongoDB\Field(type: 'string')]
    public ?string $language = null;

    #[MongoDB\Field(type: 'string')]
    public ?string $image = null;

    #[MongoDB\Field(type: 'string')]
    public ?string $job = null;

    #[MongoDB\Field(type: 'string')]
    public ?string $description = null;

    #[MongoDB\Field(type: 'string')]
    public ?string $diet = null;

    // REGISTRATION SLIDE 2
    #[MongoDB\Field(type: 'string')]
    public ?string $centerOfInterestPerso = null;
 
    #[MongoDB\Field(type: 'collection')]
    public array $centerOfInterest = [];

    #[MongoDB\Field(type: 'int')]
    public ?string $groupNbr = null;
    
    #[MongoDB\Field(type: 'collection')]
    private array $roles = [];

    // #[MongoDB\Field(type: 'array')]
    // public array $Allergy;

    // #[MongoDB\Field(type: 'string')]
    // protected string $birthdate;


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getId(): string
    {
        return $this->id;
    }

    //USERNAME
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


    // //EMAIL
    public function getEmail(): string
    {
        
        return $this->email;
    }


    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    // //PASSWORD
    public function getPassword(): string
    {
        
        return $this->password;
    }
    
    
    public function setPassword(string $password): User
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles); 
       }

    
    public function setRoles(array $roles): User
    {
        $this->roles = $roles;

        return $this;
    }


    // //AGE
    // public function getAge(): int
    // {
        
        //     return $this->age;
    // }

    
    // public function setAge(int $age): User
    // {
    //     $this->age = $age;

    //     return $this;
    // }

    // //GENDER
    // public function getGender(): string
    // {
        
    //     return $this->gender;
    // }

    
    // public function setGender(string $gender): User
    // {
    //     $this->gender = $gender;

    //     return $this;
    // }


    // //IMAGE
    // public function getImage(): string
    // {
        
    //     return $this->image;
    // }

    
    // public function setImage(string $image): User
    // {
    //     $this->image = $image;

    //     return $this;
    // }

    // //BIRTHDAY
    // public function getBirthday(): date
    // {
        
    //     return $this->birthdate;
    // }

    
    // public function setBirthday(date $birthdate): User
    // {
    //     $this->birthdate = $birthdate;

    //     return $this;
    // }

    // //JOB
    // public function getJob(): string
    // {
        
    //     return $this->job;
    // }

    
    // public function setJob(string $job): User
    // {
    //     $this->job = $job;

    //     return $this;
    // }

    // //DESCRIPTION
    // public function getDescription(): string
    // {
        
    //     return $this->description;
    // }

    
    // public function setDescription(string $description): User
    // {
    //     $this->description = $description;

    //     return $this;
    // }

    // //CITY
    // public function getCity(): string
    // {
        
    //     return $this->city;
    // }

    
    // public function setCity(string $city): User
    // {
    //     $this->city = $city;

    //     return $this;
    // }

    // //  //LANGUAGE
    // //  public function getLanguage(): array
    // //  {
         
    // //      return $this->language;
    // //  }

    // //  public function setLanguage(array $language): User
    // // {
    // //     $this->language = $language;

    // //     return $this;
    // // }
 
    // //DIET
    // public function getDiet(): string
    // {
        
    //     return $this->diet;
    // }

    //  public function setDiet(string $diet): User
    //  {
    //      $this->diet = $diet;
 
    //      return $this;
    //  }

    // //GROUPENBR
    // public function getGroupNbr(): int
    // {
        
    //     return $this->groupNbr;
    // }

    // public function setGroupNbr(int $groupNbr): User
    // {
    //     $this->groupNbr = $groupNbr;

    //     return $this;
    // }
    // //ALLERGY
    // public function getAllergy(): array
    // {
        
    //     return $this->Allergy;
    // }

    // public function setAllergy(array $Allergy): User
    // {
    //     $this->Allergy = $Allergy;

    //     return $this;
    // }

    // //CENTEROFINTEREST-PERSO
    // public function getCenterOfInterestPerso(): string
    // {
        
    //     return $this->centerOfInterestPerso;
    // }

    // public function setCenterOfInterestPerso(string $centerOfInterestPerso): User
    // {
    //     $this->centerOfInterestPerso = $centerOfInterestPerso;

    //     return $this;
    // }

    // //CENTEROFINTEREST-PERSO
    // public function getCenterOfInterest(): array
    // {
        
    //     return $this->centerOfInterest;
    // }

    // public function setCenterOfInterest(array $centerOfInterest): User
    // {
    //     $this->centerOfInterest = $centerOfInterest;

    //     return $this;
    // }
}