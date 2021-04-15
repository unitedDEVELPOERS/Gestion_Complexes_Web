<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PenaliteJoueur
 *
 * @ORM\Table(name="penalite_joueur", indexes={@ORM\Index(name="matche", columns={"matche"}), @ORM\Index(name="penalite", columns={"penalite"}), @ORM\Index(name="arbitre", columns={"arbitre"}), @ORM\Index(name="joueur", columns={"joueur"})})
 * @ORM\Entity
 */
class PenaliteJoueur
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
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arbitre", referencedColumnName="id")
     * })
     */
    private $arbitre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joueur", referencedColumnName="id")
     * })
     */
    private $joueur;

    /**
     * @var \Matche
     *
     * @ORM\ManyToOne(targetEntity="Matche")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matche", referencedColumnName="id")
     * })
     */
    private $matche;

    /**
     * @var \Penalite
     *
     * @ORM\ManyToOne(targetEntity="Penalite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="penalite", referencedColumnName="id")
     * })
     */
    private $penalite;


}
