<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Penalite
 *
 * @ORM\Table(name="penalite", indexes={@ORM\Index(name="penalite_ibfk_1", columns={"complexe"})})
 * @ORM\Entity
 */
class Penalite
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
     * @ORM\Column(name="designation", type="string", length=30, nullable=false)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_points_retires", type="integer", nullable=false)
     */
    private $nbrePointsRetires;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="complexe", referencedColumnName="id")
     * })
     */
    private $complexe;


}
