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

    #[MongoDB\Field(type: 'string')]
    protected ?string $status = null;

    #[MongoDB\Field(type: 'string')]
    protected ?string $authors = null;
    
    #[MongoDB\Field(type: "date")]
    private ?string $createdAt = null;
    
    #[MongoDB\Field(type: "date")]
    private ?string $reservationDate = null;
        
    #[MongoDB\EmbedMany(targetDocument: User::class)]
    private ?array $User = null;
  
    #[MongoDB\Field(type: 'string')]
    protected string $username;

    #[MongoDB\ReferenceOne(targetDocument: User::class)]
    private ?User $user = null; // Référence à l'utilisateur

    
    //ID
    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): string
    {
        
        return $this->status;
    }

    public function setStatus(string $status): Group
    {
        $this->status = $status;

        return $this;
    }

    //status
    public function getAuthors(): string
    {
        
        return $this->authors;
    }

    public function setAuthors(string $authors): Group
    {
        $this->authors = $authors;

        return $this;
    }

    public function getCreateGroup(): ?string
    {
        return $this->createdAt;
    }

    public function setCreateGroup(?string $createdAt): Group
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getReservationDate(): ?string
    {
        return $this->reservationDate;
    }

    public function setReservationDate(?string $reservationDate): Group
    {
        $this->reservationDate = $reservationDate;
        return $this;
    }

    //Jointure user
    
    public function getUser(): ?array
    {
        return $this->User;
    }

    public function setUser(?array $User): void
    {
        $this->User = $User;
    }
  
}