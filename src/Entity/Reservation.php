<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="terrain", columns={"terrain"}), @ORM\Index(name="client", columns={"client"})})
 * @ORM\Entity
 */
class Reservation
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
     * @ORM\Column(name="date_creation", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date", nullable=false)
     */
    private $dateReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var bool
     *
     * @ORM\Column(name="validee", type="boolean", nullable=false)
     */
    private $validee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="client", type="integer", nullable=true)
     */
    private $client;

    /**
     * @var int|null
     *
     * @ORM\Column(name="terrain", type="integer", nullable=true)
     */
    private $terrain;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=3, nullable=false)
     */
    private $montant;

    /**
     * @var bool
     *
     * @ORM\Column(name="acceptee", type="boolean", nullable=false)
     */
    private $acceptee;


}
