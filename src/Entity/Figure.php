<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FigureRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[ORM\Entity(repositoryClass: FigureRepository::class)]
class Figure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['figure'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['figure'])]
    private ?string $nom = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Groups(['figure'])]
    private ?string $slug = null;

    #[ORM\Column(length: 4096)]
    #[Groups(['figure'])]
    private ?string $article = null;
    
    #[ORM\Column(length: 10, options : ["default" => "published"])]
    #[Groups(['figure'])]
    private ?string $statu = "published";

    #[ORM\Column(type: Types::DATETIME_MUTABLE, options : ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $createdDate;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, options : ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $editedDate;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: Message::class)]
    #[Groups(['figure'])]
    private Collection $Message;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: PhotoFigure::class)]
    #[Groups(['figure'])]
    private Collection $photoFigures;

    #[ORM\OneToMany(mappedBy: 'figure', targetEntity: VideoFigure::class, cascade: ["persist"])]
    #[Groups(['figure'])]
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

    public function getStatu(): ?string
    {
        return $this->statu;
    }

    public function setStatu(string $statu): self
    {
        $this->statu = $statu;

        return $this;
    }

    public function getCreatedDate(): ?\DateTimeInterface {

        return $this->createdDate;

    }

    public function setCreatedDate(\DateTimeInterface $date): self
    {
        
        return $this->createdDate = $date;

        return $this;

    }

    public function getEditedDate(): ?\DateTimeInterface 
    {

        return $this->editedDate;

    }

    public function setEditedDate(\DateTimeInterface $date): self
    {
        $this->editedDate = $date;

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

    public function setPhotoFigures(array $photoFigures): self
    {

        foreach($photoFigures as $photoFigure) {

            $this->addPhotoFigure($photoFigure);
        }

        return $this;
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

    public function setVideoFigures(Collection $videoFigures): self
    {

        foreach($videoFigures as $videoFigure) {

            $this->addVideoFigure($videoFigure);
        }

        return $this;
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
