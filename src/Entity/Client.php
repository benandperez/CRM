<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use App\Util\TimeStampableEntity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Client
{
    
    use TimeStampableEntity;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?Project $project = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?AdvertisingMedia $advertisingMedia = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?InterestLevel $interestLevel = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?Country $country = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?ClientType $clientType = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $nextContact = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?ProgrammedActivity $programmedActivity = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    private ?User $user = null;

    #[ORM\Column(length: 100)]
    private ?string $firstName = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $secondName = null;

    #[ORM\Column(length: 100)]
    private ?string $LastName = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $secondLastName = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $landline = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $cellPhone = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observations = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $keyForQuery = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getAdvertisingMedia(): ?AdvertisingMedia
    {
        return $this->advertisingMedia;
    }

    public function setAdvertisingMedia(?AdvertisingMedia $advertisingMedia): self
    {
        $this->advertisingMedia = $advertisingMedia;

        return $this;
    }

    public function getInterestLevel(): ?InterestLevel
    {
        return $this->interestLevel;
    }

    public function setInterestLevel(?InterestLevel $interestLevel): self
    {
        $this->interestLevel = $interestLevel;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getClientType(): ?ClientType
    {
        return $this->clientType;
    }

    public function setClientType(?ClientType $clientType): self
    {
        $this->clientType = $clientType;

        return $this;
    }

    public function getNextContact(): ?\DateTimeInterface
    {
        return $this->nextContact;
    }

    public function setNextContact(?\DateTimeInterface $nextContact): self
    {
        $this->nextContact = $nextContact;

        return $this;
    }

    public function getProgrammedActivity(): ?ProgrammedActivity
    {
        return $this->programmedActivity;
    }

    public function setProgrammedActivity(?ProgrammedActivity $programmedActivity): self
    {
        $this->programmedActivity = $programmedActivity;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(?string $secondName): self
    {
        $this->secondName = $secondName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getSecondLastName(): ?string
    {
        return $this->secondLastName;
    }

    public function setSecondLastName(?string $secondLastName): self
    {
        $this->secondLastName = $secondLastName;

        return $this;
    }

    public function getLandline(): ?string
    {
        return $this->landline;
    }

    public function setLandline(?string $landline): self
    {
        $this->landline = $landline;

        return $this;
    }

    public function getCellPhone(): ?string
    {
        return $this->cellPhone;
    }

    public function setCellPhone(?string $cellPhone): self
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getKeyForQuery(): ?string
    {
        return $this->keyForQuery;
    }

    public function setKeyForQuery(?string $keyForQuery): self
    {
        $this->keyForQuery = $keyForQuery;

        return $this;
    }
}
