<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Gallery1Controller extends AbstractController
{
    /**
     * @Route("/gallery1", name="gallery1")
     */
    public function bardo(): Response
    {
        return $this->render('gallery1/bardo.html.twig');
    }
}