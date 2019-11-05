<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 *     )
 * @ORM\Entity(repositoryClass="App\Repository\SoortRepository")
 */
class Soort
{
    /**
    /**
     * @Groups({"read","write"})
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     */
    private $rassen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getRassen(): ?string
    {
        return $this->rassen;
    }

    public function setRassen(string $rassen): self
    {
        $this->rassen = $rassen;

        return $this;
    }
}
