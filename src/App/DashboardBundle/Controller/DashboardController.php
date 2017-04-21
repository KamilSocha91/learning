<?php

namespace App\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller {
  public function indexAction() {
    $data = array(
      'users' => null, 
      'courses' => null,
      'admin' => false,
      'security' => false
    );
    $security = $this->get('security.authorization_checker');

    if ($security->isGranted('ROLE_USER') || $security->isGranted('ROLE_ADMIN')) {
      $users = $this->get('usercourse.service')->getAll();
      $user = $this->get('usercourse.service')->getById($this->getUser()->getId());
      $courses = $this->get('course.service')->getAll();
      $data = array(
        'users' => $users, 
        'courses' => $courses,
        'admin' => $this->getUser()->getAdmin(),
        'security' => true
      );
    }
    
    dump($data);

    return $this->render('AppDashboardBundle:Dashboard:index.html.twig', $data );
  }

}
