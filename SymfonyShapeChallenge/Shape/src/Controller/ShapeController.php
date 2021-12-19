<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ShapeController extends AbstractController
{
    /**
     * @Route("/shape", name="shape_list")
     */

    public function list()
    {
        return uniqid();
    }
}
