<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="capitain", columns={"capitain"})})
 * @ORM\Entity
 */
class Equipe
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
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     * @Assert\NotBlank(message="nom REQUIRED")
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_joueur", type="integer", nullable=false)
     * @Assert\NotBlank(message="nombre REQUIRED")
     * @Assert\Range(
     *      min = 6,
     *      max = 12,
     *      notInRangeMessage = "You must be between {{ min }}Player and {{ max }}Player ",
     * )   */
    private $nbreJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=100, nullable=false)
     *
     */
    private $logo;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="capitain", referencedColumnName="id")
     * })
     */
    private $capitain;

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
    { if($this->nom==null){
        return"";
    }else{
        return $this->nom;
    }

    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getNbreJoueur(): int
    {  if($this->nbreJoueur==null){
        return 0;
    }else{
        return $this->nbreJoueur;
    }

    }

    /**
     * @param int $nbreJoueur
     */
    public function setNbreJoueur(int $nbreJoueur): void
    {
        $this->nbreJoueur = $nbreJoueur;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {if ( $this->logo==null){
        return"";
    }else{
        return $this->logo;
    }

    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }





}
