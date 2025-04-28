<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Gallery3Controller extends AbstractController
{
    /**
     * @Route("/gallery3", name="gallery3")
     */
    public function garden(): Response
    {
        return $this->render('gallery3/garden.html.twig');
    }
}