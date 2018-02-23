<?php

namespace AllForKids\MainBundle\Controller;
use AllForKids\MainBundle\Form\evenementType;
use AllForKids\MainBundle\Entity\evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class evenementController extends Controller
{

    public function AjouterAction(Request $request){

        $even=new evenement();
        $form=$this->createForm(evenementType::class,$even);
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $even->UploadProfilePicture();
            $em->persist($even);
            $em->flush();
            return $this->redirectToRoute('affiche_even');

        }
        return $this->render('@AllForKidsMain/Evenement/AjoutEvenement.html.twig',
                                   array('form'=>$form->createView()));
    }


    public function AfficherAction(){
        $em=$this->getDoctrine()->getManager();
        $even=$em->getRepository('AllForKidsMainBundle:evenement')->findAll();
        return $this->render('@AllForKidsMain/Evenement/ListeEvenement.html.twig',array(
            "evenement"=> $even
        ));
    }


    public function ListeAction(){
        $em=$this->getDoctrine()->getManager();
        $even=$em->getRepository('AllForKidsMainBundle:evenement')->findAll();
        return $this->render('@AllForKidsMain/Evenement/liste.html.twig',array(
            "evenement"=> $even
        ));
    }



    public function SupprimerAction($id_even){
        $em=$this->getDoctrine()->getManager();
        $even=$em->getRepository("AllForKidsMainBundle:evenement")->find($id_even);
        $em->remove($even);
        $em->flush();

        return $this->redirectToRoute('affiche_even');

    }

    public function UpdateAction(Request $req,$id_even)
    {
        $e=new evenement();
        $en=$this->getDoctrine()->getManager();
        $e= $en->getRepository('AllForKidsMainBundle:evenement')->find($id_even);
        $form=$this->createForm(evenementType::class,$e);
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            $en->persist($e);
            $en->flush();
            return $this->redirectToRoute("affiche_even");
        }
        return $this->render("@AllForKidsMain/Evenement/UpdateEvement.html.twig",array('form'=> $form->createView()));
    }



    public function RechercherAction(Request $req)
    {
        $en=$this->getDoctrine()->getManager();
        $e= $en->getRepository('AllForKidsMainBundle:evenement')->findAll();

        if($req->isMethod('POST'))
        {$titre=$req->get('libelle');
            //var_dump($titre);

            $e= $en->getRepository('AllForKidsMainBundle:evenement')->findBy(array(
                'titre'=>$titre
            ));
        }
        return $this->render('@AllForKidsMain/Evenement/RechercheEvenement.html.twig',array('evenement'=>$e));
    }




     public function ReadAction(Request $request,$id_even)
    {
        $en=$this->getDoctrine()->getManager();
       $even=$en->getRepository('AllForKidsMainBundle:evenement')->findBy(array('id_even'=>$id_even));
        return $this->render('@AllForKidsMain/Evenement/ReadMore.html.twig', array(
                'even'=>$even
        ));
    }



   public function ReserverAction(Request $request,$id_even)
    {
       /* $en=$this->getDoctrine()->getManager();
        $even=$en->getRepository('AllForKidsMainBundle:evenement')->findBy(array('id_even'=>$id_even));
        return $this->render('@AllForKidsMain/Evenement/ReadMore.html.twig', array(
            'even'=>$even
        ));*/

       if("t"<>"0"){


       }
    }











}
