<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Video2Controller extends AbstractController
{
    /**
     * @Route("/video2", name="video2")
     */
    public function vcarthage(): Response
    {
        return $this->render('video2/vcarthage.html.twig');
    }
}