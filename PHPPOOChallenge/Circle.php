<?php

require __DIR__ .'/Shape.php';

class Circle extends Shape
{
    const TYPE = 3;
    /**
     * @var int
     */
    protected $radius;

    public function __construct(int $radius)
    {
        $shapeDimensions = $radius * 2;
        parent::__construct($shapeDimensions, $shapeDimensions);
        $this->setRadius($radius);
    }

    public function getArea()
    {
        $radius = $this->getRadius();
        $area = pi() * pow($radius, 2);

        return $area;
    }

    /**
     * Get the value of radius
     *
     * @return  int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set the value of radius
     *
     * @param  int  $radius
     *
     * @return  self
     */
    public function setRadius(int $radius)
    {
        $this->radius = $radius;

        return $this;
    }
}
