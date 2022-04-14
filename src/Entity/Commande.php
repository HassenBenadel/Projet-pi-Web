<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_commande;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="vous devez remplir ce champs")
     */
    private $methpaiement;

    /**
     * @ORM\Column(type="float")
     */
    private $totalprix;

    /**
     * @ORM\Column(type="float")
     */
    private $totalpanier;

    /**
     * @ORM\Column(type="date")
     */
    private $DateCommande;

    /**
     * @ORM\Column(type="string", length=50)
     *     * @Assert\Expression(
   *     "this.getCode() > 0",
   *     message="positive")
     */
    private $code;

    /**
     * @ORM\Column(type="integer")
     *   * @Assert\Length(max=11,maxMessage= "Votre id ne contient pas 11 caractères.",min=1,minMessage= "Votre id ne contient pas 11 caractères."))
   * @Assert\Expression(
   *     "this.getIdClient() > 0",
   *     message="id doit etre positive")
   * @Assert\NotBlank(message="vous devez remplir ce champs")
   * 
     */
    private $id_client;

    /**
     * @var \CarteFidelite
     * @ORM\ManyToOne(targetEntity=CarteFidelite::class, inversedBy="commandes")
     * @JoinColumn(name="num_carte", referencedColumnName="num_carte")
     *   * @Assert\Length(max=11,maxMessage= "Votre id ne contient pas 11 caractères.",min=1,minMessage= "Votre id ne contient pas 11 caractères."))

     */
    private $num_carte;

 

    public function getId_commande(): ?int
    {
        return $this->id_commande;
    }

    public function getMethpaiement(): ?string
    {
        return $this->methpaiement;
    }

    public function setMethpaiement(string $methpaiement): self
    {
        $this->methpaiement = $methpaiement;

        return $this;
    }

    public function getTotalprix(): ?float
    {
        return $this->totalprix;
    }

    public function setTotalprix(float $totalprix): self
    {
        $this->totalprix = $totalprix;

        return $this;
    }

    public function getTotalpanier(): ?float
    {
        return $this->totalpanier;
    }

    public function setTotalpanier(float $totalpanier): self
    {
        $this->totalpanier = $totalpanier;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->DateCommande;
    }

    public function setDateCommande(\DateTimeInterface $DateCommande): self
    {
        $this->DateCommande = $DateCommande;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function setIdClient(int $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    public function getNumCarte(): ?CarteFidelite
    {
        return $this->num_carte;
    }

    public function setNumCarte(?CarteFidelite $num_carte): self
    {
        $this->num_carte = $num_carte;

        return $this;
    }

}
