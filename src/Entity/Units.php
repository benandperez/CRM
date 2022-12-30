<?php

namespace App\Entity;

use App\Repository\UnitsRepository;
use App\Util\TimeStampableEntity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnitsRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Units
{
    use TimeStampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'units')]
    private ?StatusUnits $statusUnits = null;

    #[ORM\ManyToOne(inversedBy: 'units')]
    private ?PropertyType $propertyType = null;

    #[ORM\ManyToOne(inversedBy: 'units')]
    private ?PropertyClass $propertyClass = null;

    #[ORM\Column(length: 20)]
    private ?string $number = null;

    #[ORM\Column]
    private ?bool $model = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $tower = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $level = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $floor = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $modelType = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $module = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $street = null;

    #[ORM\Column]
    private ?float $lotArea = null;

    #[ORM\Column(nullable: true)]
    private ?float $additionalMeters = null;

    #[ORM\Column]
    private ?float $totalLotArea = null;

    #[ORM\Column(nullable: true)]
    private ?float $closedArea = null;

    #[ORM\Column(nullable: true)]
    private ?float $openArea = null;

    #[ORM\Column]
    private ?float $totalArea = null;

    #[ORM\ManyToOne(inversedBy: 'units')]
    private ?AmenitiesProperty $amenitiesProperty = null;

    #[ORM\Column(nullable: true)]
    private ?int $bedRooms = null;

    #[ORM\Column(nullable: true)]
    private ?int $closets = null;

    #[ORM\Column(nullable: true)]
    private ?int $bathrooms = null;

    #[ORM\Column(nullable: true)]
    private ?int $halfBathrooms = null;

    #[ORM\Column(nullable: true)]
    private ?int $parkingLots = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observations = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'units')]
    private ?TypeKitchen $typeKitchen = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatusUnits(): ?StatusUnits
    {
        return $this->statusUnits;
    }

    public function setStatusUnits(?StatusUnits $statusUnits): self
    {
        $this->statusUnits = $statusUnits;

        return $this;
    }

    public function getPropertyType(): ?PropertyType
    {
        return $this->propertyType;
    }

    public function setPropertyType(?PropertyType $propertyType): self
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    public function getPropertyClass(): ?PropertyClass
    {
        return $this->propertyClass;
    }

    public function setPropertyClass(?PropertyClass $propertyClass): self
    {
        $this->propertyClass = $propertyClass;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function isModel(): ?bool
    {
        return $this->model;
    }

    public function setModel(bool $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getTower(): ?string
    {
        return $this->tower;
    }

    public function setTower(?string $tower): self
    {
        $this->tower = $tower;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->floor;
    }

    public function setFloor(?string $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getModelType(): ?string
    {
        return $this->modelType;
    }

    public function setModelType(?string $modelType): self
    {
        $this->modelType = $modelType;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getLotArea(): ?float
    {
        return $this->lotArea;
    }

    public function setLotArea(float $lotArea): self
    {
        $this->lotArea = $lotArea;

        return $this;
    }

    public function getAdditionalMeters(): ?float
    {
        return $this->additionalMeters;
    }

    public function setAdditionalMeters(?float $additionalMeters): self
    {
        $this->additionalMeters = $additionalMeters;

        return $this;
    }

    public function getTotalLotArea(): ?float
    {
        return $this->totalLotArea;
    }

    public function setTotalLotArea(float $totalLotArea): self
    {
        $this->totalLotArea = $totalLotArea;

        return $this;
    }

    public function getClosedArea(): ?float
    {
        return $this->closedArea;
    }

    public function setClosedArea(?float $closedArea): self
    {
        $this->closedArea = $closedArea;

        return $this;
    }

    public function getOpenArea(): ?float
    {
        return $this->openArea;
    }

    public function setOpenArea(?float $openArea): self
    {
        $this->openArea = $openArea;

        return $this;
    }

    public function getTotalArea(): ?float
    {
        return $this->totalArea;
    }

    public function setTotalArea(float $totalArea): self
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    public function getAmenitiesProperty(): ?AmenitiesProperty
    {
        return $this->amenitiesProperty;
    }

    public function setAmenitiesProperty(?AmenitiesProperty $amenitiesProperty): self
    {
        $this->amenitiesProperty = $amenitiesProperty;

        return $this;
    }

    public function getBedRooms(): ?int
    {
        return $this->bedRooms;
    }

    public function setBedRooms(?int $bedRooms): self
    {
        $this->bedRooms = $bedRooms;

        return $this;
    }

    public function getClosets(): ?int
    {
        return $this->closets;
    }

    public function setClosets(?int $closets): self
    {
        $this->closets = $closets;

        return $this;
    }

    public function getBathrooms(): ?int
    {
        return $this->bathrooms;
    }

    public function setBathrooms(?int $bathrooms): self
    {
        $this->bathrooms = $bathrooms;

        return $this;
    }

    public function getHalfBathrooms(): ?int
    {
        return $this->halfBathrooms;
    }

    public function setHalfBathrooms(?int $halfBathrooms): self
    {
        $this->halfBathrooms = $halfBathrooms;

        return $this;
    }

    public function getParkingLots(): ?int
    {
        return $this->parkingLots;
    }

    public function setParkingLots(?int $parkingLots): self
    {
        $this->parkingLots = $parkingLots;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTypeKitchen(): ?TypeKitchen
    {
        return $this->typeKitchen;
    }

    public function setTypeKitchen(?TypeKitchen $typeKitchen): self
    {
        $this->typeKitchen = $typeKitchen;

        return $this;
    }
}
