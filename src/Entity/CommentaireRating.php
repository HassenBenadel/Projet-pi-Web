<?php

namespace App\Entity;

use App\Repository\CommentaireRatingRepository;
use Doctrine\ORM\Mapping as ORM;

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
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="idcommentaire", referencedColumnName="id")
     * })
     */
    private $idcommentaire;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iduser;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
}
