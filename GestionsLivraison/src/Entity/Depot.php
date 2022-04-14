<?php

namespace App\Entity;

use App\Repository\DepotRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DepotRepository::class)
 */
class Depot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $Id_depot;

   /**
     * @Assert\NotBlank(message="adresse   :doit etre non vide")
     * @ORM\Column(type="string", length=1000)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @Assert\NotBlank(message="disponibilite   :doit etre non vide")
     * @ORM\Column(type="string", length=1000)
     */
    private $disponibilite;

    /**
     * @ORM\Column(type="integer")
     */
    private $Id_produit;

    public function getIdDepot(): ?int
    {
        return $this->Id_depot;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->Id_produit;
    }

    public function setIdProduit(int $Id_produit): self
    {
        $this->Id_produit = $Id_produit;

        return $this;
    }
     /**
     * @ORM\ManyToOne(targetEntity=Livraison::class)
     * @ORM\JoinColumn(name="Id_livraison",referencedColumnName="Id_livraison",nullable=false)
     */
    private $Id_livraison;
    

    public function getIdLivraison(): ?Livraison
    {
        return $this->Id_livraison;
    }


    public function setIdLivraison(?Livraison $Id_livraison): self
    {
        $this->Id_livraison = $Id_livraison;

        return $this;
    }

}
