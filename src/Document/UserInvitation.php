<?php

namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


#[MongoDB\EmbeddedDocument]
class UserInvitation
{
    public string $user;
    public bool $invitation;

    public function __construct(string $user, bool $invitation)
    {
        $this->user = $user;
        $this->invitation = $invitation;
    }
    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    public function isInvitation(): bool
    {
        return $this->invitation;
    }

    public function setInvitation(bool $invitation): void
    {
        $this->invitation = $invitation;
    }
}