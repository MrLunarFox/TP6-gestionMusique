<?php

namespace App\Controller\Admin;


use App\Entity\Artiste;
use App\Form\ArtisteType;
use App\Repository\ArtisteRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArtisteController extends AbstractController
{
    #[Route('/admin/artistes', name: 'admin_artistes', methods:['GET'])]
    public function listeArtistes(ArtisteRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $artistes = $paginator->paginate(
            $repo->listeArtisteCompleteAdmin(),
            $request->query->getInt('page', 1),
            9
        );

        return $this->render('admin/artiste/listeArtistes.html.twig', [
            'lesArtistes' => $artistes
        ]);
    }

    #[Route('/admin/artiste/ajout', name: 'admin_artiste_ajout', methods:['GET'])]
    public function ajoutAritiste(): Response
    {
        $artiste = new Artiste();

        $form = $this->createForm(ArtisteType::class, $artiste);

        return $this->render('admin/artiste/formAjoutArtiste.html.twig', [
            'formArtiste' => $form->createView()
        ]);
    }
}
