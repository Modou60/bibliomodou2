<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="index_admin")
     */
    public function index(): Response
    {
        return $this->render('admin/adminindex.html.twig', [
            'controller_name' => 'index_admin',
        ]);
    }


    
    
    /**
     * @Route("/systeme", name="index_systeme")
     */
    public function systeme(): Response
    {
        return $this->render('admin/systeme.html.twig', [
            'controller_name' => 'index_systeme',
        ]);
    }


    /**
     * @Route("/utilisateur", name="index_utilisateur")
     */
    public function gestionUtilisateur(): Response
    {
        return $this->render('admin/utilisateurs.html.twig', [
            'controller_name' => 'index_utilisateur',
        ]);
    }

    /**
     * @Route("/articleindex", name="index_article")
     */
    public function article(): Response
    {
        return $this->render('admin/article.html.twig', [
            'controller_name' => 'index_article',
        ]);
    }

    /**
     * @Route("/contenu", name="index_contenu")
     */
    public function gestionContenu(): Response
    {
        return $this->render('admin/contenu.html.twig', [
            'controller_name' => 'index_contenu',
        ]);
    }

    /**
     * @Route("/image", name="index_image")
     */
    public function gestionImage(): Response
    {
        return $this->render('admin/image.html.twig', [
            'controller_name' => 'index_image',
        ]);
    }

    /**
     * @Route("/extension", name="index_extension")
     */
    public function gestionExtension(): Response
    {
        return $this->render('admin/extension.html.twig', [
            'controller_name' => 'index_extension',
        ]);
    }

    /**
     * @Route("/categorie", name="index_categorie")
     */
    public function categorie(): Response
    {
        return $this->render('admin/categorie.html.twig', [
            'controller_name' => 'index_categorie',
        ]);
    }

}