<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur", indexes={@ORM\Index(name="livreur_ibfk_1", columns={"id_user"})})
 * @ORM\Entity
 */
class Livreur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livreur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="secteuractivite", type="string", length=20, nullable=false)
     */
    private $secteuractivite;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user" , cascade={"all"})
     * })
     */
    private $idUser;

    public function getIdLivreur(): ?int
    {
        return $this->idLivreur;
    }

    public function getSecteuractivite(): ?string
    {
        return $this->secteuractivite;
    }

    public function setSecteuractivite(string $secteuractivite): self
    {
        $this->secteuractivite = $secteuractivite;

        return $this;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->idUser;
    }

    public function setIdUser(?Utilisateur $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
