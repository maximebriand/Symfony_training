<?php

namespace OC\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle::homepage.html.twig');
    }

    public function contactAction(Request $request)
    {
        $session = $request->getSession();

        $session->getFlashBag()->add('info', 'La page de contact n\'est pas encore disponible, merci de revenir plus tard.');

        return $this->redirectToRoute('oc_core_homepage');

    }
}
