<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="equipe", columns={"equipe"})})
 * @ORM\Entity
 */
class Utilisateur
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
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=true)
     */
    private $role;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=true)
     */
    private $prenom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="categorie", type="integer", nullable=true)
     */
    private $categorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raison_sociale", type="string", length=20, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule_fiscale", type="string", length=20, nullable=true)
     */
    private $matriculeFiscale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verifie", type="boolean", nullable=true)
     */
    private $verifie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="solde_point", type="integer", nullable=true)
     */
    private $soldePoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position", type="string", length=20, nullable=true)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=8, nullable=true)
     */
    private $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="position_equipe", type="integer", nullable=false)
     */
    private $positionEquipe;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe", referencedColumnName="id")
     * })
     */
    private $equipe;


}
