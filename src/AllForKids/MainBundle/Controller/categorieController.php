<?php

namespace AllForKids\MainBundle\Controller;

use AllForKids\MainBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class categorieController extends Controller
{
    function AjouterCategAction(Request $request){

        $em=$this->getDoctrine()->getManager();
        $categorie=new Categorie();
        if( $request->isMethod('POST')){

            $categorie->setNomCategorie($request->get('p'));
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('ajout_even');

                               }
        return $this->render("@AllForKidsMain/Categorie/AjoutCateg.html.twig",array());
    }

}
