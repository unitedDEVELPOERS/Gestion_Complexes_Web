<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="equipe", columns={"equipe"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Email REQUIRED")
     * @Assert\Email(message="email invalide'{{ value }}'")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     * @Assert\NotBlank(message="password REQUIRED")
     * @Assert\Length(min=8, max=50, minMessage="votre mot de passe est trop court",maxMessage="votre mot de passe est trop long")
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=true)
     */
    private $role;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     * @Assert\NotBlank(message="Nom REQUIRED")

     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=true)
     * @Assert\NotBlank(message="Prenom REQUIRED")
     */
    private $prenom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="categorie", type="integer", nullable=true)

     */
    private $categorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raison_sociale", type="string", length=20, nullable=true)
     * @Assert\NotBlank(message="Raison sociale REQUIRED")
     */
    private $raisonSociale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule_fiscale", type="string", length=20, nullable=true)
     */
    private $matriculeFiscale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verifie", type="boolean", nullable=true)
     */
    private $verifie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="solde_point", type="integer", nullable=true)
     */
    private $soldePoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position", type="string", length=20, nullable=true)
     * @Assert\NotBlank(message="position REQUIRED")
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=8, nullable=true)
      * @Assert\NotBlank(message="Telephone REQUIRED")

     * @Assert\Regex(pattern ="#^[0-9]{8}$#",message="telephone invalide")
     */
    private $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="position_equipe", type="integer", nullable=false)

     */
    private $positionEquipe;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe", referencedColumnName="id")
     * })
     */
    private $equipe;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string|null $role
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom(?string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int|null
     */
    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    /**
     * @param int|null $categorie
     */
    public function setCategorie(?int $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string|null
     */
    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    /**
     * @param string|null $raisonSociale
     */
    public function setRaisonSociale(?string $raisonSociale): void
    {
        $this->raisonSociale = $raisonSociale;
    }

    /**
     * @return string|null
     */
    public function getMatriculeFiscale(): ?string
    {
        return $this->matriculeFiscale;
    }

    /**
     * @param string|null $matriculeFiscale
     */
    public function setMatriculeFiscale(?string $matriculeFiscale): void
    {
        $this->matriculeFiscale = $matriculeFiscale;
    }

    /**
     * @return bool|null
     */
    public function getVerifie(): ?bool
    {
        return $this->verifie;
    }

    /**
     * @param bool|null $verifie
     */
    public function setVerifie(?bool $verifie): void
    {
        $this->verifie = $verifie;
    }

    /**
     * @return int|null
     */
    public function getSoldePoint(): ?int
    {
        return $this->soldePoint;
    }

    /**
     * @param int|null $soldePoint
     */
    public function setSoldePoint(?int $soldePoint): void
    {
        $this->soldePoint = $soldePoint;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     */
    public function setPosition(?string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int|null
     */
    public function getPositionEquipe(): ?int
    {
        return $this->positionEquipe;
    }

    /**
     * @param int $positionEquipe
     */
    public function setPositionEquipe(int $positionEquipe): void
    {
        $this->positionEquipe = $positionEquipe;
    }

    /**
     * @return \Equipe
     */
    public function getEquipe(): \Equipe
    {
        return $this->equipe;
    }

    /**
     * @param \Equipe $equipe
     */
    public function setEquipe(\Equipe $equipe): void
    {
        $this->equipe = $equipe;
    }


}
