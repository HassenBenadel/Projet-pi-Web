<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
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

   


}