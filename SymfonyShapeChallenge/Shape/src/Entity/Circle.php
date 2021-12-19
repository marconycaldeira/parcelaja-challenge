<?php

namespace App\Entity;

use App\Entity\Shape;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CircleRepository;

/**
 * @ORM\Entity(repositoryClass=CircleRepository::class)
 */
class Circle extends Shape
{
    const TYPE = 1;

    const TYPE_NAME = 'Circle';


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $radius;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRadius(): ?float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getArea(bool $format = false): float
    {
        $area = pi() * pow($this->getRadius(), 2);
        
        return $format ? number_format($area, 2, '.', '') : $area;
    }

    public function getDimensions()
    {
        return 'R: '.$this->getRadius();
    }
}
