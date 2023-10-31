<?php

namespace App\Controller;

use App\Form\AjoutCafeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutCafeController extends AbstractController
{
    #[Route('/ajout/cafe', name: 'app_ajout_cafe')]
    public function index(): Response
    {
        $form = $this->createForm(AjoutCafeType::class);
        return $this->render('ajoutCafe.html.twig', [
            'controller_name' => 'AjoutCafeController',
        ]);
    }
    
}
