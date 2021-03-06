<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 * @package AdminBundle\Controller
 * @Route("/admin")
 */
class HomeController extends Controller
{
    /**
     * Accueil de l'administration
     * @Route("/", name="admin_home")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Home:index.html.twig');
    }

    /**
     *
     * @Route("/films-en-retard", name="admin_due_films")
     */
    public function showDueFilmsAction(){
        return $this->render('AdminBundle:Home:due-films.html.twig');
    }


}
