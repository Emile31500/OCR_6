<?php

namespace App\Entity;

use App\Repository\FiguresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FiguresRepository::class)]
class Figures
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

    #[ORM\Column]
    private ?bool $est_supprime = null;

    #[ORM\OneToMany(mappedBy: 'figures', targetEntity: VideosFigures::class)]
    private Collection $videosFigures;

    #[ORM\OneToMany(mappedBy: 'figures', targetEntity: PhotosFigures::class)]
    private Collection $photosFigures;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: Messages::class)]
    private Collection $messages;

    #[ORM\OneToOne(mappedBy: 'figure', cascade: ['persist', 'remove'])]
    private ?BrouillonFigures $brouillonFigures = null;

    public function __construct()
    {
        $this->videosFigures = new ArrayCollection();
        $this->photosFigures = new ArrayCollection();
        $this->messages = new ArrayCollection();
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

    public function isEstSupprime(): ?bool
    {
        return $this->est_supprime;
    }

    public function setEstSupprime(bool $est_supprime): self
    {
        $this->est_supprime = $est_supprime;

        return $this;
    }

    /**
     * @return Collection<int, VideosFigures>
     */
    public function getVideosFigures(): Collection
    {
        return $this->videosFigures;
    }

    public function addVideosFigure(VideosFigures $videosFigure): self
    {
        if (!$this->videosFigures->contains($videosFigure)) {
            $this->videosFigures->add($videosFigure);
            $videosFigure->setFigures($this);
        }

        return $this;
    }

    public function removeVideosFigure(VideosFigures $videosFigure): self
    {
        if ($this->videosFigures->removeElement($videosFigure)) {
            // set the owning side to null (unless already changed)
            if ($videosFigure->getFigures() === $this) {
                $videosFigure->setFigures(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PhotosFigures>
     */
    public function getPhotosFigures(): Collection
    {
        return $this->photosFigures;
    }

    public function addPhotosFigure(PhotosFigures $photosFigure): self
    {
        if (!$this->photosFigures->contains($photosFigure)) {
            $this->photosFigures->add($photosFigure);
            $photosFigure->setFigures($this);
        }

        return $this;
    }

    public function removePhotosFigure(PhotosFigures $photosFigure): self
    {
        if ($this->photosFigures->removeElement($photosFigure)) {
            // set the owning side to null (unless already changed)
            if ($photosFigure->getFigures() === $this) {
                $photosFigure->setFigures(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Messages>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Messages $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setFigure($this);
        }

        return $this;
    }

    public function removeMessage(Messages $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getFigure() === $this) {
                $message->setFigure(null);
            }
        }

        return $this;
    }

    public function getBrouillonFigures(): ?BrouillonFigures
    {
        return $this->brouillonFigures;
    }

    public function setBrouillonFigures(BrouillonFigures $brouillonFigures): self
    {
        // set the owning side of the relation if necessary
        if ($brouillonFigures->getFigure() !== $this) {
            $brouillonFigures->setFigure($this);
        }

        $this->brouillonFigures = $brouillonFigures;

        return $this;
    }
}
