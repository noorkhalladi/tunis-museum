<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Video4Controller extends AbstractController
{
    /**
     * @Route("/video4", name="video4")
     */
    public function vbaths(): Response
    {
        return $this->render('video4/vbaths.html.twig');
    }
}