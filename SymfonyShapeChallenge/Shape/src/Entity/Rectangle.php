<?php

namespace App\Entity;

use App\Repository\RectangleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RectangleRepository::class)
 */
class Rectangle extends Shape
{
    const TYPE = 2;

    const TYPE_NAME = 'Rectangle';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $length;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $width;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getArea(bool $format = false): float
    {
        $area = $this->getWidth() * $this->getLength();

        return $format ? number_format($area, 2, '.', '') : $area;
    }

    public function getDimensions()
    {
        return 'W: '.$this->getWidth().' L: '.$this->getLength();
    }
}
