<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
// llama a la entity User
use App\Entity\User;


/**
    * @Route ("/home", name="home")
    */
Class HomeController extends AbstractController {

    /**
    * @Route ("/login", name="login")
    */
    public function Login(Request $request) {
        return $this->render('login.html.twig');
    }

    /**
    * @Route ("/inicio", name="inicio")
    */
    public function Inicio(Request $request) {
        return $this->render('inicio.html.twig');
    }

    /**
    * @Route ("/control", name="control")
    */
    public function Control(Request $request) {
        // extrae los valores que se mandaron en el formulario dentro del $request
        $nombre = $request->request->get("user");
        $contrasena = $request->request->get("pass");

        // inicia elemento entidad y usando el Repository busca en la base de datos si hay coincidencia
        $en = $this-> getDoctrine()-> getManager();
        $usuario = $en -> getRepository(User::class) -> findOneBy(["name" => $nombre, "password" => $contrasena]);

        // si no hay usuario con los datos del formulario, va a error; si coincide uno, va a inicio
        if ($usuario == null) {
            return $this->render('error-login.html.twig');
        }
        else {
            // redirects to the "inicio" route
            return $this->redirect('./inicio');
        }
        
    }

};