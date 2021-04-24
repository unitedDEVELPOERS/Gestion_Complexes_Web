<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="capitain", columns={"capitain"})})
 * @ORM\Entity
 */
class Equipe
{
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
     * @return int|null
     */
    public function getNbreJoueur(): ?int
    {
        return $this->nbreJoueur;
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
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return \Utilisateur
     */
    public function getCapitain(): \Utilisateur
    {
        return $this->capitain;
    }

    /**
     * @param \Utilisateur $capitain
     */
    public function setCapitain(\Utilisateur $capitain): void
    {
        $this->capitain = $capitain;
    }
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
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_joueur", type="integer", nullable=false)
     */
    private $nbreJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=100, nullable=false)
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


}
