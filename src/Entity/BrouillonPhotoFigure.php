<?php

namespace App\Entity;

use App\Repository\BrouillonPhotoFigureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrouillonPhotoFigureRepository::class)]
class BrouillonPhotoFigure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'brouillonPhotoFigures')]
    private ?BrouillonFigures $brouillon_figure = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrouillonFigure(): ?BrouillonFigures
    {
        return $this->brouillon_figure;
    }

    public function setBrouillonFigure(?BrouillonFigures $brouillon_figure): self
    {
        $this->brouillon_figure = $brouillon_figure;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
