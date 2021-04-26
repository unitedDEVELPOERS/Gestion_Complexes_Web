<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition", indexes={@ORM\Index(name="categorie", columns={"categorie"}), @ORM\Index(name="competition_ibfk_2", columns={"complexe"})})
 * @ORM\Entity
 */
class Competition
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
     * @ORM\Column(name="designation", type="string", length=100, nullable=false)
     */
    private $designation;





    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */

    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=false)
     */
    private $dateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_equipes", type="integer", nullable=false)
     */
    private $nbreEquipes;

    /**
     * @var string
     *
     * @ORM\Column(name="prixParticipation", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $prixParticipation;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="complexe", referencedColumnName="id")
     * })
     */
    private $complexe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getNbreEquipes(): ?int
    {
        return $this->nbreEquipes;
    }

    public function setNbreEquipes(int $nbreEquipes): self
    {
        $this->nbreEquipes = $nbreEquipes;

        return $this;
    }

    public function getPrixParticipation(): ?string
    {
        return $this->prixParticipation;
    }

    public function setPrixParticipation(string $prixParticipation): self
    {
        $this->prixParticipation = $prixParticipation;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getComplexe(): ?Utilisateur
    {
        return $this->complexe;
    }

    public function setComplexe(?Utilisateur $complexe): self
    {
        $this->complexe = $complexe;

        return $this;
    }


}
