<?php

namespace App\Entity;

use App\Repository\CouleurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CouleurRepository::class)]
class Couleur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $rouge;

    #[ORM\Column(type: 'boolean')]
    private $jaune;

    #[ORM\Column(type: 'boolean')]
    private $vert;

    #[ORM\Column(type: 'boolean')]
    private $blanc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRouge(): ?bool
    {
        return $this->rouge;
    }

    public function setRouge(bool $rouge): self
    {
        $this->rouge = $rouge;

        return $this;
    }

    public function getJaune(): ?bool
    {
        return $this->jaune;
    }

    public function setJaune(bool $jaune): self
    {
        $this->jaune = $jaune;

        return $this;
    }

    public function getVert(): ?bool
    {
        return $this->vert;
    }

    public function setVert(bool $vert): self
    {
        $this->vert = $vert;

        return $this;
    }

    public function getBlanc(): ?bool
    {
        return $this->blanc;
    }

    public function setBlanc(bool $blanc): self
    {
        $this->blanc = $blanc;

        return $this;
    }
}
