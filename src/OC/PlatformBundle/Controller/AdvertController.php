<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 30/03/2017
 * Time: 09:00
 */

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction(){
        $content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'winzo'));
        return new Response($content);
    }

    public function byeAction(){
        $content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:bye.html.twig', array('nom' => 'winzo'));
        return new Response($content);
    }
}