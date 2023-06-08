<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\VideoFigureRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: VideoFigureRepository::class)]
class VideoFigure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['figure'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['figure'])]
    private ?string $urlVideo = null;

    #[ORM\ManyToOne(inversedBy: 'videoFigures', cascade: ["persist"])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Figure $figure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlVideo(): ?string
    {
        return $this->urlVideo;
    }

    public function setUrlVideo(string $urlVideo): self
    {
        $this->urlVideo = $urlVideo;

        return $this;
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

    public function removeFigure(Figure $figure): self
    {
        if ($this->Figures->removeElement($figure)) {
            
            if ($figure->getFigure() === $this) {
                $figure->setFigure(null);
            }
        }

        return $this;
    }
}
