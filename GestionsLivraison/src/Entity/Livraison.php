<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id_livraison;

    public function getIdLivraison(): ?int
    {
        return $this->Id_livraison;
    }
    /**
     * @ORM\Column(type="date")
     */
    private $Date_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix_total;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mode_paiement;

    /**
     * @ORM\Column(type="integer")
     */
    private $Id_livreur;

    /**
     * @ORM\Column(type="integer")
     */
    private $Id_commande;

    /**
     * @ORM\Column(type="integer")
     */
    private $Id_client;

    public function setIdLivraison(int $Id_livraison): self
    {
        $this->Id_livraison = $Id_livraison;

        return $this;
    }


  

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->Date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $Date_livraison): self
    {
        $this->Date_livraison = $Date_livraison;

        return $this;
    }

    public function getPrixTotal(): ?string
    {
        return $this->prix_total;
    }

    public function setPrixTotal(string $prix_total): self
    {
        $this->prix_total = $prix_total;

        return $this;
    }

    public function getModePaiement(): ?string
    {
        return $this->mode_paiement;
    }

    public function setModePaiement(string $mode_paiement): self
    {
        $this->mode_paiement = $mode_paiement;

        return $this;
    }

    public function getIdLivreur(): ?int
    {
        return $this->Id_livreur;
    }

    public function setIdLivreur(int $Id_livreur): self
    {
        $this->Id_livreur = $Id_livreur;

        return $this;
    }

    public function getIdCommande(): ?int
    {
        return $this->Id_commande;
    }

    public function setIdCommande(int $Id_commande): self
    {
        $this->Id_commande = $Id_commande;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->Id_client;
    }

    public function setIdClient(int $Id_client): self
    {
        $this->Id_client = $Id_client;

        return $this;
    }
  

    /**
     * @ORM\OneToMany(targetEntity=Depot::class, mappedBy="Id_livraison")
     */
    private $depot;

    public function __construct2()
    {
        $this->depot = new ArrayCollection();
    }
    public function __toString()
    {
        return (string)$this->getIdLivraison();
    }
}
