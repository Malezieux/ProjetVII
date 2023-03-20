<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'profil')]
#[ORM\Entity(repositoryClass: ProfilRepository::class)]
class Profil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    


    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdProfil = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $annee_formation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $formation = null;

    #[ORM\OneToOne(inversedBy: 'profil', cascade: ['persist', 'remove'])]
    private ?User $IdUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProfil(): ?int
    {
        return $this->IdProfil;
    }

    public function setIdProfil(int $IdProfil): self
    {
        $this->IdProfil = $IdProfil;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnneeFormation(): ?string
    {
        return $this->annee_formation;
    }

    public function setAnneeFormation(?string $annee_formation): self
    {
        $this->annee_formation = $annee_formation;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->IdUser;
    }

    public function setIdUser(?User $IdUser): self
    {
        $this->IdUser = $IdUser;

        return $this;
    }
}
