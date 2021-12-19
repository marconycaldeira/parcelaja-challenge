<?php

namespace App\Entity;

abstract class Shape
{
    const TYPE = 1;
    const TYPE_NAME = 'Shape';

    abstract public function getArea(bool $format = false);
    abstract public function getDimensions();

    public function getType()
    {
        return $this::TYPE;
    }

    public function getTypeName()
    {
        return $this::TYPE_NAME;
    }
}
