<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1D1C63B3E7927C74", columns={"email"})}, indexes={@ORM\Index(name="IDX_1D1C63B3BCF5E72D", columns={"categorie_id"}), @ORM\Index(name="IDX_1D1C63B36D861B89", columns={"equipe_id"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Utilisateur implements UserInterface
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
     * @var int|null
     *
     * @ORM\Column(name="categorie_id", type="integer", nullable=true)
     */
    private $categorieId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="equipe_id", type="integer", nullable=true)
     */
    private $equipeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=true)
     */
    private $email;

    /**
     * @var json|null
     *
     * @ORM\Column(name="roles", type="json", nullable=true)
     */
    private $roles;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raison_sociale", type="string", length=255, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule_fiscale", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="position", type="string", length=255, nullable=true)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position_equipe", type="integer", nullable=true)
     */
    private $positionEquipe;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

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
     * @return int|null
     */
    public function getCategorieId(): ?int
    {
        return $this->categorieId;
    }

    /**
     * @param int|null $categorieId
     */
    public function setCategorieId(?int $categorieId): void
    {
        $this->categorieId = $categorieId;
    }

    /**
     * @return int|null
     */
    public function getEquipeId(): ?int
    {
        return $this->equipeId;
    }

    /**
     * @param int|null $equipeId
     */
    public function setEquipeId(?int $equipeId): void
    {
        $this->equipeId = $equipeId;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return json|null
     */
    public function getRoles(): ?json
    {
        return $this->roles;
    }

    /**
     * @param json|null $roles
     */
    public function setRoles(?json $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
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
     * @param int|null $positionEquipe
     */
    public function setPositionEquipe(?int $positionEquipe): void
    {
        $this->positionEquipe = $positionEquipe;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }


    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
