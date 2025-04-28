<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Gallery4Controller extends AbstractController
{
    /**
     * @Route("/gallery3", name="gallery3")
     */
    public function baths(): Response
    {
        return $this->render('gallery4/baths.html.twig');
    }
}