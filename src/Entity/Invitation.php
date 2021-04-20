<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation", indexes={@ORM\Index(name="utilisateur", columns={"utilisateur"}), @ORM\Index(name="equipe", columns={"equipe"})})
 * @ORM\Entity
 */
class Invitation
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
     * @ORM\Column(name="type", type="string", length=200, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="equipe", type="integer", nullable=false)
     */
    private $equipe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur", type="integer", nullable=true)
     */
    private $utilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="valide", type="integer", nullable=false)
     */
    private $valide;


}
