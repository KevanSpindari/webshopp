<?php

namespace App\Entity;

use App\Repository\FactuurRegelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactuurRegelRepository::class)
 */
class FactuurRegel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $aantal;

    /**
     * @ORM\ManyToOne(targetEntity=Factuur::class, inversedBy="factuurRegels")
     */
    private $FactuurID;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="factuurRegels")
     */
    private $ProductID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAantal(): ?string
    {
        return $this->aantal;
    }

    public function setAantal(string $aantal): self
    {
        $this->aantal = $aantal;

        return $this;
    }

    public function getFactuurID(): ?Factuur
    {
        return $this->FactuurID;
    }

    public function setFactuurID(?Factuur $FactuurID): self
    {
        $this->FactuurID = $FactuurID;

        return $this;
    }

    public function getProductID(): ?Product
    {
        return $this->ProductID;
    }

    public function setProductID(?Product $ProductID): self
    {
        $this->ProductID = $ProductID;

        return $this;
    }
}
