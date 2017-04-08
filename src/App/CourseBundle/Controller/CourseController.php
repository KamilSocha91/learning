<?php

namespace App\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class CourseController extends Controller {
  
  public function courseAction() {
    $data = [];

    try {
      $data['courses'] = $this->get('course.service')->getAll();
    } catch (\Exception $e) {
      throw new BadRequestHttpException("Unable to load courses list");
    }

    return $this->render('AppCourseBundle:Course:course.html.twig', $data);

  }

  /*
  * $id - course id
  */
  public function questionAction($id = null) {
    $redis = $this->container->get('snc_redis.course');
    $user = $this->getUser()->getId();

    $data = [];
    if ( is_null( $redis->get('user-'.$user.',course-'.$id) ) ) {
      $data['questionsId'] = $this->get('question.service')->questionsId($id);
      $data = $this->random($data);
      $data['question'] = $this->get('question.service')->getById($data['random'])[0];
      $data['course'] = $id;

      $redis->set('user-'.$user.',course-'.$id, json_encode($data));
    } else {
      $data = json_decode($redis->get('user-'.$user.',course-'.$id), true);
    }

    $data['question'] = $this->getComponents($data['question']);

    return new Response(json_encode($data));

  }

  private function random($data) {
    $key = array_rand($data['questionsId']);
    $data['random'] = $data['questionsId'][$key];
    unset($data['questionsId'][$key]);

    return $data;
  }

  private function getComponents($data) {
    if ($data['choose'] && $data['image']) {
      $data = $this->get('question.service')->getBoth($data['id'])[0];
    } else if ($data['choose']) {
      $data = $this->get('question.service')->getChooses($data['id'])[0];
    } else if ($data['image']) {
      $data = $this->get('question.service')->getImage($data['id'])[0];
    }

    return $data;
  }

  public function answerAction(Request $request) {
    $redis = $this->container->get('snc_redis.course');
    $user = $this->getUser()->getId();
    $course = json_decode($request->getContent(),true);
    $data = json_decode($redis->get('user-'.$user.',course-'.$course['course']), true);
    
    $data['score'] = $this->get('score.service')->getById($user)[0];
    // if there is no field answer ...
    //check answer for choose
    if ($course['answer'] == $data['question']['answer']) {
      $data = $this->setScore($data);
    }
    $data = $this->random($data);
    $data['question'] = $this->get('question.service')->getById($data['random'])[0];
    $data['question'] = $this->getComponents($data['question']);

    // valid answer input
    // get type to check correctly
    // get random from database, by "type" +
    // if score != 0 && score not smaller than 3 points from highest "type" score +
    
    // if $this->random return null save data to databases

    // umów konsultacje
    // start with create view
    
    $redis->set('user-'.$user.',course-'.$data['course'], json_encode($data));

    return new Response(json_encode($data));
  }

  private function setScore($redis) {
    if($redis['question']['choose']) {
      $redis['score']['choose'] += 1;
    }
    if($redis['question']['sound']) {
      $redis['score']['sound'] += 1;
    }
    if($redis['question']['image']) {
      $redis['score']['image'] += 1;
    }
    if($redis['question']['question']) {
      $redis['score']['write'] += 1;
    } 
    
    return $redis;
  }

}
