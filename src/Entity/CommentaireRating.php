<?php

namespace App\Entity;

use App\Repository\CommentaireRatingRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Null_;

/**
 * CommentaireRating
 *
 * @ORM\Table(name="commentairerating", indexes={@ORM\Index(name="fk_commentaire_id", columns={"idcommentaire"})})
 * @ORM\Entity(repositoryClass=CommentaireRatingRepository::class)
 */
class CommentaireRating
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumn(name="idcommentaire", referencedColumnName="id", nullable=false)
     */
    private $idcommentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function __toString(): string
    {
        return $this->id ?: '';
    }

    public function getIdcommentaire(): ?Commentaire
    {
        return $this->idcommentaire;
    }

    public function setIdcommentaire(?Commentaire $idcommentaire): self
    {
        $this->idcommentaire = $idcommentaire;

        return $this;
    }
}
