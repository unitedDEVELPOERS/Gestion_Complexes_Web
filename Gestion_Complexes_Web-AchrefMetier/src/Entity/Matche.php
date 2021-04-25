<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matche
 *
 * @ORM\Table(name="matche", indexes={@ORM\Index(name="niveau_competition", columns={"niveau_competition"}), @ORM\Index(name="terrain", columns={"terrain"}), @ORM\Index(name="equipe1", columns={"equipe1"}), @ORM\Index(name="arbitre", columns={"arbitre"}), @ORM\Index(name="equipe2", columns={"equipe2"})})
 * @ORM\Entity
 */
class Matche
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
     * @return \DateTime
     */
    public function getDateCreation(): \DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime $dateCreation
     */
    public function setDateCreation(\DateTime $dateCreation): void
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return \DateTime
     */
    public function getDateMatch(): \DateTime
    {
        return $this->dateMatch;
    }

    /**
     * @param \DateTime $dateMatch
     */
    public function setDateMatch(\DateTime $dateMatch): void
    {
        $this->dateMatch = $dateMatch;
    }

    /**
     * @return int|null
     */
    public function getResultatEq1(): ?int
    {
        return $this->resultatEq1;
    }

    /**
     * @param int|null $resultatEq1
     */
    public function setResultatEq1(?int $resultatEq1): void
    {
        $this->resultatEq1 = $resultatEq1;
    }

    /**
     * @return int|null
     */
    public function getResultatEq2(): ?int
    {
        return $this->resultatEq2;
    }

    /**
     * @param int|null $resultatEq2
     */
    public function setResultatEq2(?int $resultatEq2): void
    {
        $this->resultatEq2 = $resultatEq2;
    }

    /**
     * @return bool|null
     */
    public function getValide(): ?bool
    {
        return $this->valide;
    }

    /**
     * @param bool|null $valide
     */
    public function setValide(?bool $valide): void
    {
        $this->valide = $valide;
    }

    /**
     * @return \Equipe
     */
    public function getEquipe1(): \Equipe
    {
        return $this->equipe1;
    }

    /**
     * @param \Equipe $equipe1
     */
    public function setEquipe1(\Equipe $equipe1): void
    {
        $this->equipe1 = $equipe1;
    }

    /**
     * @return \Equipe
     */
    public function getEquipe2(): \Equipe
    {
        return $this->equipe2;
    }

    /**
     * @param \Equipe $equipe2
     */
    public function setEquipe2(\Equipe $equipe2): void
    {
        $this->equipe2 = $equipe2;
    }

    /**
     * @return \NiveauCompetition
     */
    public function getNiveauCompetition(): \NiveauCompetition
    {
        return $this->niveauCompetition;
    }

    /**
     * @param \NiveauCompetition $niveauCompetition
     */
    public function setNiveauCompetition(\NiveauCompetition $niveauCompetition): void
    {
        $this->niveauCompetition = $niveauCompetition;
    }

    /**
     * @return \Terrain
     */
    public function getTerrain(): \Terrain
    {
        return $this->terrain;
    }

    /**
     * @param \Terrain $terrain
     */
    public function setTerrain(\Terrain $terrain): void
    {
        $this->terrain = $terrain;
    }

    /**
     * @return \Utilisateur
     */
    public function getArbitre(): \Utilisateur
    {
        return $this->arbitre;
    }

    /**
     * @param \Utilisateur $arbitre
     */
    public function setArbitre(\Utilisateur $arbitre): void
    {
        $this->arbitre = $arbitre;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_match", type="datetime", nullable=false)
     */
    private $dateMatch;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resultat_eq1", type="integer", nullable=true)
     */
    private $resultatEq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resultat_eq2", type="integer", nullable=true)
     */
    private $resultatEq2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="valide", type="boolean", nullable=true)
     */
    private $valide;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe1", referencedColumnName="id")
     * })
     */
    private $equipe1;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe2", referencedColumnName="id")
     * })
     */
    private $equipe2;

    /**
     * @var \NiveauCompetition
     *
     * @ORM\ManyToOne(targetEntity="NiveauCompetition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="niveau_competition", referencedColumnName="id")
     * })
     */
    private $niveauCompetition;

    /**
     * @var \Terrain
     *
     * @ORM\ManyToOne(targetEntity="Terrain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="terrain", referencedColumnName="id")
     * })
     */
    private $terrain;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arbitre", referencedColumnName="id")
     * })
     */
    private $arbitre;


}
