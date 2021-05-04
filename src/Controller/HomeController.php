<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


/**
    * @Route ("/home", name="home")
    */
Class HomeController extends AbstractController {

    /**
    * @Route ("/inicio", name="inicio")
    */
    public function Inicio(Request $request) {
        return $this->render('base.html.twig');
    }
};