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
 * @ORM\Entity(repositoryClass="App\Repository\MensRepository")
 */
class Mens
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
     *     max = 3,
     * )
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $leeftijd;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"Man", "Vrouw", "Neutraal"})
     */
    private $geslacht;

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
     * @Assert\Country
     */

    private $land;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=37)
     * @Assert\Iban(
     *     message="This is not a valid International Bank Account Number (IBAN)."
     * )
     */
    private $iban;

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

    public function getGeslacht(): ?string
    {
        return $this->geslacht;
    }

    public function setGeslacht(string $geslacht): self
    {
        $this->geslacht = $geslacht;

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

    public function getLand(): ?string
    {
        return $this->land;
    }

    public function setLand(string $land): self
    {
        $this->land = $land;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }
}
