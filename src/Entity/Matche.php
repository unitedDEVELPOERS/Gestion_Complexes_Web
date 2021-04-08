<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matche
 *
 * @ORM\Table(name="matche", indexes={@ORM\Index(name="equipe2", columns={"equipe2"}), @ORM\Index(name="niveau_competition", columns={"niveau_competition"}), @ORM\Index(name="arbitre", columns={"arbitre"}), @ORM\Index(name="terrain", columns={"terrain"}), @ORM\Index(name="equipe1", columns={"equipe1"})})
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
     * @var int|null
     *
     * @ORM\Column(name="arbitre", type="integer", nullable=true)
     */
    private $arbitre;

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
     * @var \Terrain
     *
     * @ORM\ManyToOne(targetEntity="Terrain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="terrain", referencedColumnName="id")
     * })
     */
    private $terrain;

    /**
     * @var \NiveauCompetition
     *
     * @ORM\ManyToOne(targetEntity="NiveauCompetition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="niveau_competition", referencedColumnName="id")
     * })
     */
    private $niveauCompetition;


}
