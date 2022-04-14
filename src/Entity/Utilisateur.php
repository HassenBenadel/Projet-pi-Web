<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="Client" ,  mappedBy="idClient" , cascade={"all"})
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 20,
     *      minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 20,
     *      minMessage = "Le prenom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le prenom  doit comporter au plus {{ limit }} caractères"
     * )
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 20,
     *      minMessage = "Le prenom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le prenom  doit comporter au plus {{ limit }} caractères"
     * )
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 7,
     *      max = 20,
     *      minMessage = "Le numero de telephone ne doit pas contenir moin que {{limit}} nombre",
     *      maxMessage = "Le numero de telephone ne doit pas contenir plus que {{limit}} nombre"
     * )
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=false)
     * @Assert\NotBlank
     * @Assert\File(
     *     maxSize = "1024k",
     *     mimeTypesMessage = "Please upload a valid image"
     * )
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=20, nullable=false)
     * @Assert\Country
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20, nullable=false)
     * 
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=false)
     * @Assert\NotBlank
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="typecompte", type="string", length=15, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 5,
     *      max = 20,
     *      minMessage = "Le mot de passe doit contenir {{limit}} charctére au minimum",
     *      maxMessage = "Le mot de passe doit contenir au plus {{limit}} charactére"
     * )
     */
    private $typecompte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code", type="integer", nullable=true, options={"default"="NULL"})
     * 
     */
    private $code = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ban", type="boolean", nullable=false)
     */
    private $ban = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="banexpiration", type="date", nullable=true, options={"default"="NULL"})
     */
    private $banexpiration = 'NULL';

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getTypecompte(): ?string
    {
        return $this->typecompte;
    }

    public function setTypecompte(string $typecompte): self
    {
        $this->typecompte = $typecompte;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getBan(): ?bool
    {
        return $this->ban;
    }

    public function setBan(bool $ban): self
    {
        $this->ban = $ban;

        return $this;
    }

    public function getBanexpiration(): ?\DateTimeInterface
    {
        return $this->banexpiration;
    }

    public function setBanexpiration(?\DateTimeInterface $banexpiration): self
    {
        $this->banexpiration = $banexpiration;

        return $this;
    }
}
