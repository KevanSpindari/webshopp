<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductenController extends AbstractController
{
    /**
     * @Route("/producten", name="producten")
     */
    public function index()
    {
        return $this->render('producten/index.html.twig', [
            'controller_name' => 'ProductenController',
        ]);
    }
}
