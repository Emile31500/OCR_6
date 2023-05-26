<?php

namespace App\Entity;

use App\Repository\FigureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FigureRepository::class)]
class Figure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[ORM\Column(length: 4096)]
    private ?string $article = null;
    
    #[ORM\Column(length: 10, options : ["default" => "published"])]
    private ?string $statu = "published";

    #[ORM\Column(length: 255)]
    private ?string $imageUrl = null;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: Message::class)]
    private Collection $Message;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: PhotoFigure::class)]
    private Collection $photoFigures;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: VideoFigure::class)]
    private Collection $videoFigures;

    public function __construct()
    {
        $this->Message = new ArrayCollection();
        $this->photoFigures = new ArrayCollection();
        $this->videoFigures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(string $article): self
    {
        $this->article = $article;

        return $this;
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

    public function getStatu(): ?string
    {
        return $this->statu;
    }

    public function setStatu(string $statu): self
    {
        $this->statu = $statu;

        return $this;
    }
    
    /**
     * @return Collection<int, Message>
     */
    public function getMessage(): Collection
    {
        return $this->Message;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->Message->contains($message)) {
            $this->Message->add($message);
            $message->setFigure($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->Message->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getFigure() === $this) {
                $message->setFigure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PhotoFigure>
     */
    public function getPhotoFigures(): Collection
    {
        return $this->photoFigures;
    }

    public function addPhotoFigure(PhotoFigure $photoFigure): self
    {
        if (!$this->photoFigures->contains($photoFigure)) {
            $this->photoFigures->add($photoFigure);
            $photoFigure->setFigure($this);
        }

        return $this;
    }

    public function removePhotoFigure(PhotoFigure $photoFigure): self
    {
        if ($this->photoFigures->removeElement($photoFigure)) {
            // set the owning side to null (unless already changed)
            if ($photoFigure->getFigure() === $this) {
                $photoFigure->setFigure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, VideoFigure>
     */
    public function getVideoFigures(): Collection
    {
        return $this->videoFigures;
    }

    public function addVideoFigure(VideoFigure $videoFigure): self
    {
        if (!$this->videoFigures->contains($videoFigure)) {
            $this->videoFigures->add($videoFigure);
            $videoFigure->setFigure($this);
        }

        return $this;
    }

    public function removeVideoFigure(VideoFigure $videoFigure): self
    {
        if ($this->videoFigures->removeElement($videoFigure)) {
            // set the owning side to null (unless already changed)
            if ($videoFigure->getFigure() === $this) {
                $videoFigure->setFigure(null);
            }
        }

        return $this;
    }

}
