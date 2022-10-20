<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    // #[Route('/aboutus', name: 'app_aboutus')]
    public function aboutus(): Response
    {
        return $this->render('about_us/index.html.twig' );
    }
}
