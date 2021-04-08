<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcceptationReservation
 *
 * @ORM\Table(name="acceptation_reservation", indexes={@ORM\Index(name="client", columns={"client"}), @ORM\Index(name="reservation", columns={"reservation"})})
 * @ORM\Entity
 */
class AcceptationReservation
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
     * @var bool|null
     *
     * @ORM\Column(name="acceptee", type="boolean", nullable=true)
     */
    private $acceptee;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reservation", referencedColumnName="id")
     * })
     */
    private $reservation;


}
