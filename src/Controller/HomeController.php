<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
// llama a la entity User
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
    * @Route ("/home", name="home")
    */
Class HomeController extends AbstractController {

    /**
    * @Route ("/inicio", name="inicio")
    */
    public function Inicio(Request $request) {
        return $this->render('index.html.twig');
    }

    /**
    * @Route ("/control", name="control")
    */
    public function Control(Request $request): RedirectResponse {
        return $this->redirectToRoute('Inicio');
    }

    /**
    * @Route ("/exito", name="exito")
    */
    public function Exito(Request $request) {
        return $this->render('exito.html.twig');
    }
};