<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Gallery2Controller extends AbstractController
{
    /**
     * @Route("/gallery2", name="gallery2")
     */
    public function carthage(): Response
    {
        return $this->render('gallery2/carthage.html.twig');
    }
}