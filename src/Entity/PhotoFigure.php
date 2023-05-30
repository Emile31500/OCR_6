<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PhotoFigureRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[ORM\Entity(repositoryClass: PhotoFigureRepository::class)]
class PhotoFigure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['figure'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['figure'])]
    private ?string $imageUrl = null;

    #[Groups(['figure'])]
    private ?string $image;

    #[ORM\ManyToOne(inversedBy: 'photoFigures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Figure $figure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;

    }

    public function getImage(): ?string
    {
       
        return $this->image;
        
    }

    public function getFigure(): ?Figure
    {
        return $this->figure;
    }

    public function setFigure(?Figure $figure): self
    {
        $this->figure = $figure;

        return $this;
    }
}
