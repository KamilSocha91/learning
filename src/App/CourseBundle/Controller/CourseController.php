<?php

namespace App\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class CourseController extends Controller
{
    public function courseAction()
    {
        return $this->render('AppCourseBundle:Course:course.html.twig', array(
            // ...
        ));
    }

    public function questionAction(Request $request, $id = null)
    {
    	$form_data = ['test'=>'test'];
        return $this->render('AppCourseBundle:Course:question.html.twig', $form_data);
    }

    public function answerAction() {
/*        try {
            $this->get('doctrine');
            $this->get('tree.service')->save($request->getContent());
            $list = $this->get('tree.service')->getAllTrees();
        } catch (\Exception $e) {
            throw new BadRequestHttpException("Unable to save json");
        }*/

        $response = array("code" => 200, "success" => true/*, "list" => $list*/);
        return new Response(json_encode($response));
    }

}
