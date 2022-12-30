<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use App\Util\TimeStampableEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Project
{
    use TimeStampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $shortName = null;

    #[ORM\Column]
    private ?float $separatesWith = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    private ?ConstructionType $constructionType = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ubication = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $projectFinishes = null;

    #[ORM\ManyToMany(targetEntity: Amenities::class, inversedBy: 'projects')]
    private Collection $amenities;

    #[ORM\Column(nullable: true)]
    private ?int $elevators = null;

    #[ORM\OneToMany(mappedBy: 'project', targetEntity: Client::class)]
    private Collection $clients;

    #[ORM\Column]
    private ?bool $status = null;

    public function __construct()
    {
        $this->amenities = new ArrayCollection();
        $this->clients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(?string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    public function getSeparatesWith(): ?float
    {
        return $this->separatesWith;
    }

    public function setSeparatesWith(float $separatesWith): self
    {
        $this->separatesWith = $separatesWith;

        return $this;
    }

    public function getConstructionType(): ?ConstructionType
    {
        return $this->constructionType;
    }

    public function setConstructionType(?ConstructionType $constructionType): self
    {
        $this->constructionType = $constructionType;

        return $this;
    }

    public function getUbication(): ?string
    {
        return $this->ubication;
    }

    public function setUbication(?string $ubication): self
    {
        $this->ubication = $ubication;

        return $this;
    }

    public function getProjectFinishes(): ?string
    {
        return $this->projectFinishes;
    }

    public function setProjectFinishes(?string $projectFinishes): self
    {
        $this->projectFinishes = $projectFinishes;

        return $this;
    }

    /**
     * @return Collection<int, Amenities>
     */
    public function getAmenities(): Collection
    {
        return $this->amenities;
    }

    public function addAmenity(Amenities $amenity): self
    {
        if (!$this->amenities->contains($amenity)) {
            $this->amenities->add($amenity);
        }

        return $this;
    }

    public function removeAmenity(Amenities $amenity): self
    {
        $this->amenities->removeElement($amenity);

        return $this;
    }

    public function getElevators(): ?int
    {
        return $this->elevators;
    }

    public function setElevators(?int $elevators): self
    {
        $this->elevators = $elevators;

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients->add($client);
            $client->setProject($this);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if ($this->clients->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getProject() === $this) {
                $client->setProject(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}
