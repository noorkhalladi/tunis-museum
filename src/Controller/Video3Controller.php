<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Video3Controller extends AbstractController
{
    /**
     * @Route("/video3", name="video3")
     */
    public function vgarden(): Response
    {
        return $this->render('video3/vgarden.html.twig');
    }
}