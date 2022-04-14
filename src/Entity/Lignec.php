<?php

namespace App\Entity;
use App\Entity\Panier;
use App\Repository\LignecRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass=LignecRepository::class)
 */
class Lignec
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $idP;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @var \Panier
     * @ORM\ManyToOne(targetEntity=Panier::class, inversedBy="lignes")
     *  @JoinColumn(name="id_panier", referencedColumnName="id_panier")
     * 
     */
    private $id_panier;

    public function getId(): ?int
    {
        return $this->id;
    }

 
    public function __construct()
    {
        
        $this->quantite = 0;
    }
    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function setIdP(int $idP): self
    {
        $this->idP = $idP;

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
    public function ajouterQuantite(int $qte)
	{
		$this->quantite += qte;
        return $this;
	}
    	public function dimQuantite(int $qte)
	{
		$this->quantite -= qte;
	}
    public function setPrixLigne(): void
	{
              // Produit $p=new Produit();
  
        $this->prix= 200 /*$p->getbyid($this.idP)*/ * $this->getQuantite();
		
	}
    public function getPrix(): ?float
	{
              // Produit $p=new Produit();
  
        return $this->prix;
		
	}
        public function prixbypanier(String $idpanier) :?float
        {  $price;
            if($this->id_panier==$idpanier)
            {
              return $price=$this->getPrixLigne();
            }
            return 0;
        }

        public function getIdPanier(): ?Panier
        {
            return $this->id_panier;
        }

        public function setIdPanier(?Panier $panier): self
        {
            $this->id_panier = $panier;

            return $this;
        }








}
