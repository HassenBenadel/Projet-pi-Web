<?php

namespace App\Entity;

use App\Repository\CarteFideliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CarteFideliteRepository::class)
 */
class CarteFidelite
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="num_carte")
     * @ORM\Column(type="integer")
     */
    private $Num_carte;

    /**
     * @ORM\Column(type="integer")
     *   * @Assert\Length(max=11,maxMessage= "Votre id ne contient pas 11 caractères.",min=3,minMessage= "Votre id ne contient pas 11 caractères."))
     * @Assert\Expression(
   *     "this.getIdClient() > 0",
   *     message="id positive")
   * @Assert\NotBlank(message="vous devez remplir ce champs")
     */
    private $id_client;

    /**
     * @ORM\Column(type="integer")
     */
    private $Numpoint;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Datecreation;

    /**
     * @ORM\Column(type="datetime")
     * 
     */
    private $Datefinvalidite;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="num_carte")
     * 
     */
    private $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }
    public function __toString(): string
{
    return $this->Num_carte;  // or some string field in your Vegetal Entity 
}

    public function getNum_carte(): ?string
    {
        return $this->Num_carte;
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

    public function getNumpoint(): ?int
    {
        return $this->Numpoint;
    }

    public function setNumpoint(int $Numpoint): self
    {
        $this->Numpoint = $Numpoint;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->Datecreation;
    }

    public function setDatecreation(\DateTimeInterface $Datecreation): self
    {
        $this->Datecreation = $Datecreation;

        return $this;
    }

    public function getDatefinvalidite(): ?\DateTime
    {
        return $this->Datefinvalidite;
    }

    public function setDatefinvalidite(\DateTime $Datefinvalidite): self
    {
        $this->Datefinvalidite = $Datefinvalidite;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setNumCarte($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getNumCarte() === $this) {
                $commande->setNumCarte(null);
            }
        }

        return $this;
    }
}
