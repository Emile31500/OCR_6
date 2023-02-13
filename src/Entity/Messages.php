<?php

namespace App\Entity;

use App\Repository\MessagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessagesRepository::class)]
class Messages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateurs $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    private ?Figures $figure = null;

    #[ORM\Column(length: 1500)]
    private ?string $message = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $est_supprime = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateurs
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateurs $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getFigure(): ?Figures
    {
        return $this->figure;
    }

    public function setFigure(?Figures $figure): self
    {
        $this->figure = $figure;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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
}
