<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaire;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creation;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity=Annonce::class, inversedBy="commentaires")
     */
    private $Annonce;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCreation(): ?\DateTimeInterface
    {
        return $this->creation;
    }

    public function setCreation(\DateTimeInterface $creation): self
    {
        $this->creation = $creation;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getAnnonce(): ?Annonce
    {
        return $this->Annonce;
    }

    public function setAnnonce(?Annonce $Annonce): self
    {
        $this->Annonce = $Annonce;

        return $this;
    }
}
