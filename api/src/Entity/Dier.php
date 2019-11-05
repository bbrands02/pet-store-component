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
 * @ORM\Entity(repositoryClass="App\Repository\DierRepository")
 */
class Dier
{
    /**
     * @Groups({"read","write"})
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
    private $ras;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     */
    private $soort;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="integer")
     */
    private $leeftijd;

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

    public function getRas(): ?string
    {
        return $this->ras;
    }

    public function setRas(string $ras): self
    {
        $this->ras = $ras;

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getLeeftijd(): ?int
    {
        return $this->leeftijd;
    }

    public function setLeeftijd(int $leeftijd): self
    {
        $this->leeftijd = $leeftijd;

        return $this;
    }
}
