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

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 4096)]
    private ?string $article = null;
    
    #[ORM\Column(length: 10, options : ["default" => "published"])]
    private ?string $statu = "published";

    #[ORM\OneToMany(mappedBy: 'Figure', targetEntity: VideoFigure::class)]
    private Collection $VideoFigure;

    #[ORM\OneToMany(mappedBy: 'Figure', targetEntity: PhotoFigure::class)]
    private Collection $PhotoFigure;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: Message::class)]
    private Collection $Message;

    public function __construct()
    {
        $this->VideoFigure = new ArrayCollection();
        $this->PhotoFigure = new ArrayCollection();
        $this->Message = new ArrayCollection();
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
     * @return Collection<int, VideoFigure>
     */
    public function getVideoFigure(): Collection
    {
        return $this->VideoFigure;
    }

    public function addVideoFigure(VideoFigure $VideoFigure): self
    {
        if (!$this->VideoFigure->contains($VideoFigure)) {
            $this->VideoFigure->add($VideoFigure);
            $VideoFigure->setFigure($this);
        }

        return $this;
    }

    public function removeVideoFigure(VideoFigure $VideoFigure): self
    {
        if ($this->VideoFigure->removeElement($VideoFigure)) {
            // set the owning side to null (unless already changed)
            if ($VideoFigure->getFigure() === $this) {
                $VideoFigure->setFigure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PhotoFigure>
     */
    public function getPhotoFigure(): Collection
    {
        return $this->PhotoFigure;
    }

    public function addPhotoFigure(PhotoFigure $PhotoFigure): self
    {
        if (!$this->PhotoFigure->contains($PhotoFigure)) {
            $this->PhotoFigure->add($PhotoFigure);
            $PhotoFigure->setFigure($this);
        }

        return $this;
    }

    public function removePhotoFigure(PhotoFigure $PhotoFigure): self
    {
        if ($this->PhotoFigure->removeElement($PhotoFigure)) {
            // set the owning side to null (unless already changed)
            if ($PhotoFigure->getFigure() === $this) {
                $PhotoFigure->setFigure(null);
            }
        }

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

}
