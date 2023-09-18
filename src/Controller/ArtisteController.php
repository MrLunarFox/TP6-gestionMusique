<?php

namespace App\Controller;

use App\Repository\ArtisteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArtisteController extends AbstractController
{
    #[Route('/artistes', name: 'artistes', methods:['GET'])]
    public function listeArtistes(ArtisteRepository $repo): Response
    {
        $artistes = $repo->findAll();

        return $this->render('artiste/listeArtistes.html.twig', [
            'lesArtistes' => $artistes
        ]);
    }
}
