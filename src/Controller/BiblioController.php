<?php

namespace App\Controller;

use PhpParser\Node\Expr\FuncCall;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;

class BiblioController extends AbstractController
{
    /**
     * @Route("/", name="indexbiblio")
     */
    public function index(): Response
    {
        return $this->render('biblio/index.html.twig', [
            'controller_name' => 'indexbiblio',
        ]);
    }


    /**
     * @Route("/apropos", name="index_apropos")
     */
    public function apropos(): Response
    {
        return $this->render('biblio/apropos.html.twig', [
            'controller_name' => 'index_apropos',
        ]);
    }


    
    /**
     * @Route("/quoi", name="index_quoi")
     */
    public function quoi(): Response
    {
        return $this->render('biblio/quoi.html.twig', [
            'controller_name' => 'index_quoi',
        ]);
    }

    /**
     * @Route("/quoi2", name="index_quoi2")
     */
    public function quoi2(): Response
    {
        return $this->render('biblio/quoi2.html.twig', [
            'controller_name' => 'index_quoi2',
        ]);
    }


    /**
     * @Route("/location", name="index_location")
     */
    public function location(): Response
    {
        return $this->render('biblio/location.html.twig', [
            'controller_name' => 'index_location',
        ]);
    }


    /**
     * @Route("/contact", name="index_contact")
     */
    public function contacter(): Response
    {
        return $this->render('biblio/contact.html.twig', [
            'controller_name' => 'index_contact',
        ]);
    }

    /**
     * @Route("/admin", name="index_admin")
     */
    public function administrer(): Response
    {
        return $this->render('admin/adminindex.html.twig', [
            'controller_name' => 'index_admin',
        ]);
    }


    /**
     * @Route("/connexion", name="index_connexion")
     */
    public function connexion(): Response
    {
        return $this->render('biblio/connexion.html.twig', [
            'controller_name' => 'index_connexion',
        ]);
    }

/**
 * @Route("/perso", name="index_perso")
 */
public function perso(): Response
{
    return $this->render('biblio/perso.html.twig',[
        'controller_name' => 'index_perso',
    ]);
}
    
/**
     * @Route("/documentation", name="index_documentation")
     */
    public function documentation(): Response
    {
        return $this->render('biblio/documentation.html.twig', [
            'controller_name' => 'index_documentation',
        ]);
    }

/**
     * @Route("/livre", name="index_livre")
     */
    public function livre(): Response
    {
        return $this->render('biblio/livres.html.twig', [
            'controller_name' => 'index_livre',
        ]);
    }
    
    /**
     * @Route("/logout", name="index_logout")
     */
    public function logout(): Response
    {
        return $this->render('biblio/perso.html.twig', [
            'controller_name' => 'index_logout',
        ]);
    }
}
