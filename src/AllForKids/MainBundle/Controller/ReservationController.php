<?php

namespace AllForKids\MainBundle\Controller;

use AllForKids\MainBundle\Entity\evenement;
use AllForKids\MainBundle\Entity\Reservation;
use AllForKids\MainBundle\Form\evenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller
{
    public function AjoutReservationAction(Request $request)
    {
        $reservation=new evenement();
        $form=$this->createForm(evenementType::class,$reservation);
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            //$reservation->UploadProfilePicture();
            $em->persist($reservation);
            $em->flush();
            // return $this->redirectToRoute('affiche_even');

        }
        return $this->render('@AllForKidsMain/Reservation/ajout_reservation.html.twig',
            array('form'=>$form->createView()));

    }

    public function ListerReservationAction(Request $request)
    {
        return $this->render('@AllForKidsMain/Reservation/ListeReservation.html.twig');
    }

}
