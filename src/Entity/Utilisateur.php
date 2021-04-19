<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(message="Email REQUIRED")
     * @Assert\Email(message="email invalide'{{ value }}'")
     */
    private $email;

    /**
     * @ORM\Column(type="json")

     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="password REQUIRED")
     * @Assert\Length(min=8, max=50, minMessage="votre mot de passe est trop court",maxMessage="votre mot de passe est trop long")

     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank(message="Nom REQUIRED")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Prenom REQUIRED")
     */
    private $prenom;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="utilisateurs")
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="Raison sociale REQUIRED")
     */
    private $raisonSociale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matriculeFiscale;



    /**
     * @ORM\Column(type="integer")
     */
    private $soldePoint;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="position REQUIRED")
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=255)

     * @Assert\NotBlank(message="Telephone REQUIRED")

     * @Assert\Regex(pattern ="#^[0-9]{8}$#",message="telephone invalide")
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $positionEquipe;

    /**
     * @ORM\ManyToOne(targetEntity=Equipe::class, inversedBy="utilisateurs")
     */
    private $equipe;

   // /**
    // * @ORM\Column(type="boolean")
   //  */
  //  private $isVerified = false;
    /**
     * @param int $id
     */
    public function getId(): ?int
    {
        return $this->id;
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

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface

     * @return string|null

     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }
    /**
     * @param string $password
     */

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
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
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    /**
 * @return int|null
 */

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }
    /**
     * @param int|null $categorie
     */

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
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
    public function setRaisonSociale(string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
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
    public function setMatriculeFiscale(string $matriculeFiscale): self
    {
        $this->matriculeFiscale = $matriculeFiscale;

        return $this;
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
    public function setSoldePoint(int $soldePoint): self
    {
        $this->soldePoint = $soldePoint;

        return $this;
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
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
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
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
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
    public function setPositionEquipe(int $positionEquipe): self
    {
        $this->positionEquipe = $positionEquipe;

        return $this;
    }

    /**
     * @return \Equipe
     */
    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }
    /**
     * @param \Equipe $equipe
     */
    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

   // public function isVerified(): ?bool
  //  {
   //     return $this->isVerified;
   // }

    //public function setIsVerified(bool $isVerified): self
    //{
     //   $this->isVerified = $isVerified;

      //  return $this;
   // }
}
