<?php

namespace App\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppDashboardBundle:Dashboard:index.html.twig', array(
            // ...
        ));
    }

}
