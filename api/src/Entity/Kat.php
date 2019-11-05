<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 *     )
 * @ORM\Entity(repositoryClass="App\Repository\KatRepository")
 */
class Kat
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
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 2,
     * )
     */
    private $naam;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 1,
     *     max = 2,
     * )
     */
    private $leeftijd;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     */
    private $geboortedatum;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 3,
     * )
     */
    private $ras;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 3,
     * )
     */
    private $soort;

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

    public function getLeeftijd(): ?int
    {
        return $this->leeftijd;
    }

    public function setLeeftijd(int $leeftijd): self
    {
        $this->leeftijd = $leeftijd;

        return $this;
    }

    public function getGeboortedatum(): ?\DateTimeInterface
    {
        return $this->geboortedatum;
    }

    public function setGeboortedatum(\DateTimeInterface $geboortedatum): self
    {
        $this->geboortedatum = $geboortedatum;

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
}
