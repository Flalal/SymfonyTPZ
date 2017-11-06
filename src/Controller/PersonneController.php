<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 06/11/17
 * Time: 15:57
 */

namespace App\Controller;

use App\Entity\Personne;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends Controller
{
function creation(){
    $p1 = new Personne("Flahaut","Florian","florian-flahaut@hotmail.fr","Flalal","Flal#3420");
    $p2 = new Personne("Cornu","Bastien","BC@gmail.com","BastienCornu",NULL);
    $p3 = new Personne("111","222","333","444",NULL);
    $users[] = $p1;
    $users[] = $p2;
    $users[] = $p3;
    //print_r($users);
    return $users;
}


    /**
     *  @Route("/personne/creation", name="app_personnecontroller_show")
     */
function show(){
    $users = $this->creation();
    return $this->render('personne.html.twig',['users' => $users]);
}


    /**
     *  @Route("/personne", name="app_personnecontroller_index")
     */
function index(){
    $users = $this->creation();

}

}