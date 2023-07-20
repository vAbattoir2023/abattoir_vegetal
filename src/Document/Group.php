<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
// use Doctrine\ODM\MongoDB\Mapping\Annotations\EmbedOne;
use Symfony\Component\Validator\Constraints\Date;
use Doctrine\Common\Collections\ArrayCollection;
use App\Document\User;


#[MongoDB\Document]
class Group
{
    #[MongoDB\Id]
    protected string $id;

    // #[MongoDB\Field(type: 'string')]
    // protected ?string $status = null;

    // #[MongoDB\Field(type: 'string')]
    // protected ?string $authors = null;
    
    // An example of a date type property
    // #[MongoDB\Field(type: "date")]
    // private ?\DateTime $createdAt = null;
    
    // An example of a date type property
    // #[MongoDB\Field(type: "date")]
    // private ?\DateTime $reservationDate = null;
        
    // An exemple of an embedded collection
    // #[MongoDB\EmbedMany(targetDocument: User::class)]
    // private ?ArrayCollection $UserId = null;
  
    #[MongoDB\Field(type: 'string')]
    protected string $username;

      // Jointure user
    
    // public function getUserId(): ?ArrayCollection
    // {
    //     return $this->UserId;
    // }

    // public function setUserId(?ArrayCollection $UserId): Group
    // {
    //     $this->UserId = $UserId;
    //     return $this;
    // }

    // public function addUserId(?User $UserId): Group
    // {
    //     $this->UserId->add($UserId);
    //     return $this;
    // }

    // public function removeUserId(?User $UserId): Group
    // {
    //     $this->UserId->removeElement($UserId);
    //     return $this;
    // }

    
    //ID
    public function getId(): string
    {
        return $this->id;
    }

    //status
    // public function getStatus(): string
    // {
        
    //     return $this->status;
    // }

    // public function setStatus(string $status): Group
    // {
    //     $this->status = $status;

    //     return $this;
    // }

    // //status
    // public function getAuthors(): string
    // {
        
    //     return $this->authors;
    // }

    // public function setAuthors(string $authors): Group
    // {
    //     $this->authors = $authors;

    //     return $this;
    // }

    // public function getCreatedAt(): ?\DateTime
    // {
    //     return $this->createdAt;
    // }

    // public function setCreatedAt(?\DateTime $createdAt): Group
    // {
    //     $this->createdAt = $createdAt;
    //     return $this;
    // }

    // public function getReservationDate(): ?\DateTime
    // {
    //     return $this->reservationDate;
    // }

    // public function setReservationDate(?\DateTime $reservationDate): Group
    // {
    //     $this->reservationDate = $reservationDate;
    //     return $this;
    // }

      //USERNAME
      public function getUserName(): string
      {
          
          return $this->username;
      }
  
      public function setUserName(string $username): Group
      {
          $this->username = $username;
  
          return $this;
      }
  
}