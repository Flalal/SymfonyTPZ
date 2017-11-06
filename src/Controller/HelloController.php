<?php

/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 06/11/17
 * Time: 13:31
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    public function hello() {

        return new Response('<html><body>Hello</body></html>');
    }

    /**
     *  @Route("/hello/", name="app_hellocontroller_helloannot")
     */
    public function helloAnnot() {

        return new Response('<html><body>Hello</body></html>');
    }

    /**
     *  @Route("/hello/helloPageUn", name="app_hellocontroller_hellopageun")
     */
    public function helloPageUn() {
        $kappa = "Kappa! 1";
        return $this->render('Page/page1.html.twig',['title' => __FUNCTION__,'kappa' => $kappa]);
    }

    /**
     *  @Route("/hello/helloPageDeux", name="app_hellocontroller_hellopagedeux")
     */
    public function helloPageDeux() {
        $kappa = "Kappa! 2";
        return $this->render('Page/page2.html.twig',['title' => __FUNCTION__,'kappa' => $kappa]);
    }
}