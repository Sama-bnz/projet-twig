<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route ("/", name="bonjour")
     */
    public function bonjour()
    {
        //Je crée ma variable name



        // je récupére le fichier twig
        // Je transforme en fichier html
        // et la retourne au navigateur

        return $this->render('home.html.twig');

    }
}