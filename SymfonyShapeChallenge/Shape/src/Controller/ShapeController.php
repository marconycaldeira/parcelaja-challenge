<?php

namespace App\Controller;

use App\Services\ShapeService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShapeController extends AbstractController
{
    protected $shape;

    public function __construct(ShapeService $shape)
    {
        $this->shape = $shape;
    }
    /**
     * @Route("/shape/list", name="list")
     */
    public function list(): Response
    {
        $shapes = $this->shape->all();

        return $this->render('shape/list.xml.twig', [
            'shapes' => $shapes,
        ]);
    }
}
