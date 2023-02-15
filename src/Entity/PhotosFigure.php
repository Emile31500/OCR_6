<?php

namespace App\Entity;

use App\Repository\PhotoFigureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhotoFigureRepository::class)]
class PhotoFigure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'PhotoFigure')]
    private ?Figure $Figure = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFigure(): ?Figure
    {
        return $this->Figure;
    }

    public function setFigure(?Figure $Figure): self
    {
        $this->Figure = $Figure;

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
