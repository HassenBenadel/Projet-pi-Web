<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_commentaire", columns={"idPost"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="commentateur", type="string", length=250, nullable=false)
     */
    private $commentateur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=250, nullable=false)
     */
    private $contenu;

    /**
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPost", referencedColumnName="id")
     * })
     */
    private $idpost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getCommentateur(): ?string
    {
        return $this->commentateur;
    }

    public function setCommentateur(string $commentateur): self
    {
        $this->commentateur = $commentateur;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdpost(): ?Post
    {
        return $this->idpost;
    }

    public function setIdpost(?Post $idpost): self
    {
        $this->idpost = $idpost;

        return $this;
    }
}
