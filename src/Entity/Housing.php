<?php

namespace App\Entity;

use App\Repository\HousingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HousingRepository::class)]
class Housing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 500)]
    private $Description;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $img;

    #[ORM\Column(type: 'integer')]
    private $numberOfPeopleAccepted;

    #[ORM\Column(type: 'string', length: 255)]
    private $Location;

    #[ORM\Column(type: 'boolean')]
    private $petsAcceptance;

    #[ORM\Column(type: 'string', length: 255)]
    private $durationOfStay;

    #[ORM\Column(type: 'string', length: 255)]
    private $language;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'housings')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'housings')]
    #[ORM\JoinColumn(nullable: true)]
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getNumberOfPeopleAccepted(): ?int
    {
        return $this->numberOfPeopleAccepted;
    }

    public function setNumberOfPeopleAccepted(int $numberOfPeopleAccepted): self
    {
        $this->numberOfPeopleAccepted = $numberOfPeopleAccepted;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->Location;
    }

    public function setLocation(string $Location): self
    {
        $this->Location = $Location;

        return $this;
    }

    public function getPetsAcceptance(): ?bool
    {
        return $this->petsAcceptance;
    }

    public function setPetsAcceptance(bool $petsAcceptance): self
    {
        $this->petsAcceptance = $petsAcceptance;

        return $this;
    }

    public function getDurationOfStay(): ?string
    {
        return $this->durationOfStay;
    }

    public function setDurationOfStay(string $durationOfStay): self
    {
        $this->durationOfStay = $durationOfStay;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCategorie(): ?Category
    {
        return $this->categorie;
    }

    public function setCategorie(?Category $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
