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

    public function questionAction(Request $request)
    {
        return $this->render('CourseBundle:Course:question.html.twig', $form_data);
    }

}
