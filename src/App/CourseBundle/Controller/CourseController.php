<?php

namespace App\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CourseController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppCourseBundle:Course:index.html.twig', array(
            // ...
        ));
    }

    public function courseAction()
    {
        return $this->render('AppCourseBundle:Course:course.html.twig', array(
            // ...
        ));
    }

}
