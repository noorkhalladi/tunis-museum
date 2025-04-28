<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/museums", name="museums")
     */
    public function museums(): Response
    {
        return $this->render('museums/museums.html.twig');
    }

    /**
     * @Route("/milestones", name="milestones")
     */
    public function milestones(): Response
    {
        return $this->render('milestones/milestones.html.twig');
    }

    /**
     * @Route("/sites", name="sites")
     */
    public function sites(): Response
    {
        return $this->render('sites/sites.html.twig');
    }
    
}
