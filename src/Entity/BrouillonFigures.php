<?php

namespace App\Entity;

use App\Repository\BrouillonFiguresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrouillonFiguresRepository::class)]
class BrouillonFigures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'brouillonFigures', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Figures $figure = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 4096)]
    private ?string $article = null;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $est_publie = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $est_supprime = false;

    #[ORM\OneToMany(mappedBy: 'brouillon_figure', targetEntity: BrouillonPhotoFigure::class)]
    private Collection $brouillonPhotoFigures;

    #[ORM\OneToMany(mappedBy: 'brouillon_figure', targetEntity: BrouillonVideoFigure::class)]
    private Collection $brouillonVideoFigures;

    public function __construct()
    {
        $this->brouillonPhotoFigures = new ArrayCollection();
        $this->brouillonVideoFigures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFigure(): ?Figures
    {
        return $this->figure;
    }

    public function setFigure(Figures $figure): self
    {
        $this->figure = $figure;

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

    public function isEstPublie(): ?bool
    {
        return $this->est_publie;
    }

    public function setEstPublie(bool $est_publie): self
    {
        $this->est_publie = $est_publie;

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
     * @return Collection<int, BrouillonPhotoFigure>
     */
    public function getBrouillonPhotoFigures(): Collection
    {
        return $this->brouillonPhotoFigures;
    }

    public function addBrouillonPhotoFigure(BrouillonPhotoFigure $brouillonPhotoFigure): self
    {
        if (!$this->brouillonPhotoFigures->contains($brouillonPhotoFigure)) {
            $this->brouillonPhotoFigures->add($brouillonPhotoFigure);
            $brouillonPhotoFigure->setBrouillonFigure($this);
        }

        return $this;
    }

    public function removeBrouillonPhotoFigure(BrouillonPhotoFigure $brouillonPhotoFigure): self
    {
        if ($this->brouillonPhotoFigures->removeElement($brouillonPhotoFigure)) {
            // set the owning side to null (unless already changed)
            if ($brouillonPhotoFigure->getBrouillonFigure() === $this) {
                $brouillonPhotoFigure->setBrouillonFigure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BrouillonVideoFigure>
     */
    public function getBrouillonVideoFigures(): Collection
    {
        return $this->brouillonVideoFigures;
    }

    public function addBrouillonVideoFigure(BrouillonVideoFigure $brouillonVideoFigure): self
    {
        if (!$this->brouillonVideoFigures->contains($brouillonVideoFigure)) {
            $this->brouillonVideoFigures->add($brouillonVideoFigure);
            $brouillonVideoFigure->setBrouillonFigure($this);
        }

        return $this;
    }

    public function removeBrouillonVideoFigure(BrouillonVideoFigure $brouillonVideoFigure): self
    {
        if ($this->brouillonVideoFigures->removeElement($brouillonVideoFigure)) {
            // set the owning side to null (unless already changed)
            if ($brouillonVideoFigure->getBrouillonFigure() === $this) {
                $brouillonVideoFigure->setBrouillonFigure(null);
            }
        }

        return $this;
    }
}
