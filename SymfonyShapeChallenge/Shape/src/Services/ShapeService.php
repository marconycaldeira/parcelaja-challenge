<?php

namespace App\Services;

use App\Repository\CircleRepository;
use App\Repository\RectangleRepository;

class ShapeService
{
    protected $rectangleRepository;
    protected $circleRepository;

    public function __construct(
        RectangleRepository $rectangleRepository,
        CircleRepository $circleRepository
    ) {
        $this->rectangleRepository = $rectangleRepository;
        $this->circleRepository = $circleRepository;
    }

    public function all()
    {
        $shapes = array_merge($this->getRectangles(), $this->getCircles());
        usort($shapes, function($a, $b){
         return ($a->getArea() <=> $b->getArea());
        });
        return $shapes;
    }

    public function getRectangles()
    {
        return $this->rectangleRepository->findAll();
    }

    public function getCircles()
    {
        return $this->circleRepository->findAll();
    }
}
