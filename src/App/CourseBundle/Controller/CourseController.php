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
    $data = [];
    try {
      $data['courses'] = $this->get('course.service')->getAll();
    } catch (\Exception $e) {
      throw new BadRequestHttpException("Unable to load courses list");
    }
///////////
    $redis = $this->container->get('snc_redis.course');
    $key = 'new';
    $value = [
        'age' => 44,
        'country' => 'finland',
        'occupation' => 'software engineer',
        'reknown' => 'linux kernel',
      ];
    $redis->set($key, json_encode($value));

    dump(json_decode($redis->get($key))); 
/////////////
    return $this->render('AppCourseBundle:Course:course.html.twig', $data);

  }

  /*
  * 
  *
  *
  */
  public function questionAction(Request $request, $id = null)
  {
  /*  try {*/
      $questions = $this->get('question.service')->getQuestions($id);
      //$tree = $this->loadRootNode($nodes[0]->getId(), $treeId);
   /* } catch (\Exception $e) {
      throw new BadRequestHttpException("Unable to load questions");
    }*/

  	$form_data = [
      'title'=>'question Controller',
      'question'=>'Are you sure u r loooking for this?',
      'test'=>$questions
    ];

    return $this->render('AppCourseBundle:Course:question.html.twig', $form_data);

    return $this->render('AppCourseBundle:Course:sound.html.twig', $form_data);

    return $this->render('AppCourseBundle:Course:choose.html.twig', $form_data);

    return $this->render('AppCourseBundle:Course:image.html.twig', $form_data);
  }

  public function answerAction() {
/*  try {
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
