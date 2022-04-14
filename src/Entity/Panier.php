<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_panier;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $id_client;

    /**
     * @ORM\Column(type="float")
     */
    private $totalpanier;

    /**
     * @ORM\OneToMany(targetEntity=Lignec::class, mappedBy="id_panier")
     *cascade={"remove"} 
     *
     */
    private $lignes;

    public function __construct()
    {
        $this->lignes = new ArrayCollection();
    }
    public function __toString(): string
{
    return $this->id_panier;  // or some string field in your Vegetal Entity 
}

    public function getId_panier(): ?int
    {
        return $this->id_panier;
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

    public function getTotalpanier(): ?float
    {
        return $this->totalpanier;
    }

    public function setTotalpanier(float $totalpanier): self
    {
        $this->totalpanier = $totalpanier;

        return $this;
    }
    public function calculerPanier() :float {
       $total = 0;
       foreach($lignes->getIterator() as $i => $item) {

            $total += $item->prixbypanier($this->getId_panier());
        }
        return $total;
    }

    /**
     * @return Collection<int, Lignec>
     */
    public function getLignes(): Collection
    {
        return $this->lignes;
    }

    public function addLigne(Lignec $ligne): self
    {
        if (!$this->lignes->contains($ligne)) {
            $this->lignes[] = $ligne;
            $ligne->setPanier($this);
        }

        return $this;
    }

    public function removeLigne(Lignec $ligne): self
    {
        if ($this->lignes->removeElement($ligne)) {
            // set the owning side to null (unless already changed)
            if ($ligne->getPanier() === $this) {
                $ligne->setPanier(null);
            }
        }

        return $this;
    }
}
