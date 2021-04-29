<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

Class HomeController extends AbstractController {

    /**
    * @Route ("/home", name="home")
    */
    public function Home(Request $request) {
        return $this->render('base.html.twig');
    }
};    