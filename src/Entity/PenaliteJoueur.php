<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PenaliteJoueur
 *
 * @ORM\Table(name="penalite_joueur", indexes={@ORM\Index(name="joueur", columns={"joueur"}), @ORM\Index(name="matche", columns={"matche"}), @ORM\Index(name="penalite", columns={"penalite"}), @ORM\Index(name="arbitre", columns={"arbitre"})})
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
     * @var int|null
     *
     * @ORM\Column(name="penalite", type="integer", nullable=true)
     */
    private $penalite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="arbitre", type="integer", nullable=true)
     */
    private $arbitre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="joueur", type="integer", nullable=true)
     */
    private $joueur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="matche", type="integer", nullable=true)
     */
    private $matche;


}
