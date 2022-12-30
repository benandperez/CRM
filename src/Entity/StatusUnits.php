<?php

namespace App\Entity;

use App\Repository\StatusUnitsRepository;
use App\Util\TimeStampableEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusUnitsRepository::class)]
#[ORM\HasLifecycleCallbacks]
class StatusUnits
{
    use TimeStampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\OneToMany(mappedBy: 'statusUnits', targetEntity: Units::class)]
    private Collection $units;

    public function __construct()
    {
        $this->units = new ArrayCollection();
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

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, Units>
     */
    public function getUnits(): Collection
    {
        return $this->units;
    }

    public function addUnit(Units $unit): self
    {
        if (!$this->units->contains($unit)) {
            $this->units->add($unit);
            $unit->setStatusUnits($this);
        }

        return $this;
    }

    public function removeUnit(Units $unit): self
    {
        if ($this->units->removeElement($unit)) {
            // set the owning side to null (unless already changed)
            if ($unit->getStatusUnits() === $this) {
                $unit->setStatusUnits(null);
            }
        }

        return $this;
    }
}
