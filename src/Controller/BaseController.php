<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AjoutCafeType;

class BaseController extends AbstractController
{
    #[Route('/base', name: 'base')]  // /base est l’URL de la page, name est le nom de la route
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [ // render est la fonction qui va chercher le fichier TWIG pour l’afficher
            'controller_name' => 'BaseController', // Le contrôleur donne à la vue une variable dont le contenu est BaseController, cela nous ne servira pas, nous l’enlèverons un peu plus loin
        ]);
    }
    #[Route('/ajoutCafe', name: 'ajoutCafe')]
    public function ajoutCafe(): Response
    {
        $form = $this->createForm(ajoutCafeType::class);
        return $this->render('base/ajoutCafe.html.twig', [
            'form' => $form->createView()
        ]);
    } 
}

 

      