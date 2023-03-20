<?php

namespace App\Entity;

use App\Repository\DonnesPersoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonnesPersoRepository::class)]
class DonnesPerso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]


    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdDonnePerso = null;

        #[ORM\Column]
    private ?int $IdFormation = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_naissance = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFormation(): ?int
    {
        return $this->IdFormation;
    }

    public function setIdFormation(int $IdFormation): self
    {
        $this->IdFormation = $IdFormation;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getIdDonnePerso(): ?string
    {
        return $this->idDonnePerso;
    }

    public function setIdDonnePerso(?string $idDonnePerso): self
    {
        $this->idDonnePerso = $idDonnePerso;

        return $this;
    }

    
}
