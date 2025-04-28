<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Video1Controller extends AbstractController
{
    /**
     * @Route("/video1", name="video1")
     */
    public function vbardo(): Response
    {
        return $this->render('video1/vbardo.html.twig');
    }
}