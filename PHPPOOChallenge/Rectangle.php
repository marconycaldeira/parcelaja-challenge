<?php
class Rectangle extends Shape
{
    const TYPE = 2;

    public function getArea()
    {
        return $this->getLength() * $this->getWidth();
    }
}
