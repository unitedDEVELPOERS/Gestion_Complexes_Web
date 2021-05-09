<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("Produit")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer", nullable=false)
     * @Groups("Produit")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     * @Groups("Produit")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=false)
     * @Groups("Produit")
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     * @Groups("Produit")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     * @Groups("Produit")
     */
    private $quantite;




    /**
     * @param int $id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {

    }


    /**
     * @param int $reference
     */

    public function getReference(): ?int
    {
        return $this->reference;
    }


    /**
     * @param int $reference
     */
    public function setReference(int $reference): void
    {
        $this->reference = $reference;


    }


    /**
     * @param string $name
     */

    public function getName(): ?string
    {
        return $this->name;
    }


    /**
     * @param string $name
     */

    public function setName(string $name): void
    {
        $this->name = $name;

    }
    /**
     * @param string $image
     */

    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * @param string $image
     */

    public function setImage(string $image): void
    {
        $this->image = $image;


    }

    /**
     * @param float $price
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * @param float $price
     */

    public function setPrice(float $price): void
    {
        $this->price = $price;


    }

    /**
     * @param int $quantite
     */


    public function getQuantite(): ?int
    {
        return $this->quantite;
    }
    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;


    }


}
