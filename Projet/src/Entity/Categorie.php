<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="type", columns={"type"})})
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="reference")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var string
     * 
     * @ORM\Column(name="type", type="string", length=254, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="imageC", type="string", length=250, nullable=false)
     */
    private $imagec;

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getImagec(): ?string
    {
        return $this->imagec;
    }

    public function setImagec(string $imagec): self
    {
        $this->imagec = $imagec;

        return $this;
    }

    public function __toString(): string
    {
        return $this->idc ?: '';
    }

}
