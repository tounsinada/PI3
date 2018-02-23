<?php

namespace AllForKids\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    public function adminAction()
    {
        return $this->render('@AllForKidsMain/Admin/admin2.html.twig', array(
            // ...
        ));
    }


}
