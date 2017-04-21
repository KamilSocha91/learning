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
    $user = $this->getUser()->getAdmin();
    $data = [];
    $data['admin'] = $user;

    try {
      $data['courses'] = $this->get('course.service')->getAll();
    } catch (\Exception $e) {
      throw new BadRequestHttpException("Unable to load courses list");
    }

    return $this->render('AppCourseBundle:Course:course.html.twig', $data);

  }

  /**
   * @param request 
   */
  public function createAction(Request $request) {
    $data = json_decode($request->getContent(), true);

    $this->get('doctrine');
    $course = $this->get('course.service')->save($data['name']);

    foreach ($data["questions"] as $key => $val) {
      $question = $this->get('question.service')->save($val, $course);

      foreach ($val["chooses"] as $key => $value) {
        $this->get('choose.service')->save($value, $question);
      }
      foreach ($val["patterns"] as $key => $value) {
        $this->get('pattern.service')->save($value, $question);
      }
      if (isset($val["images"][0])) {
        $id = $this->get('image.service')->save($val["images"][0], $question);
        $redis = $this->container->get('snc_redis.course');
        $redis->set('img-'.$id, json_encode($val["images"]));
      }
    }
    
    $data['succes'] = true;
    $data['message'] = 'Course have been created!';

    return new Response( json_encode($data) );
  }

  /**
   * @param request 
   */
  public function editAction($id = null) {
    //edit course action
    $data['succes'] = false;
    $data['message'] = '';

    return new Response( json_encode($data) );
  }

  /*
  * $id - course id
  */
  public function questionAction($id = null) {
    $redis = $this->container->get('snc_redis.course');
    $user = $this->getUser();
    //save properly to redis
    /*if ( $redis->get('course-'.$id) != 0 ) {*/
      $course = $this->get('course.service')->getById($id)[0];
      $userCourse = $this->get('usercourse.service')->getByUserCourse($user, $course);
      if (!empty($userCourse)) {
        $this->get('doctrine');
        $this->get('usercourse.service')->save($user, $course);
      }
     /* $redis->set('course-'.$id, 0);
    }*/

    $data = [];
    if ( is_null( $redis->get('user-'.$user.',course-'.$id) ) ) {
      $data['questionsId'] = $this->get('question.service')->questionsId($id);
      $data = $this->random($data);
      $data['question'] = $this->get('question.service')->getById($data['random'])[0];
      $data['course'] = $id;
      $data['question'] = $this->getComponents($data['question'], $redis);
      $data['skip'] = false;

      $redis->set('user-'.$user->getId().',course-'.$id, json_encode($data));
    } else {
      $data = json_decode($redis->get('user-'.$user.',course-'.$id), true);
    }

    return new Response(json_encode($data));

  }

  public function answerAction(Request $request) {
    $redis = $this->container->get('snc_redis.course');
    $user = $this->getUser()->getId();
    $course = json_decode($request->getContent(),true);
    $data = json_decode($redis->get('user-'.$user.',course-'.$course['course']), true);
    $data['score'] = $this->get('score.service')->getById($user)[0];

    if ( $this->checkAnswer($course, $data['question']) != false || $data['skip'] == true ) {
      $data = $this->setScore($data);
    }
    // get random from database, by "type" +
    // if score != 0 && score not smaller than 3 points from highest "type" score +
    $data = $this->random($data);

    if ( is_null($data['random']) ) {
      $score = $this->get('score.service')->getObjectById($data['score']['id'])[0];
      $this->get('doctrine');
      $this->get('score.service')->update($data['score'], $score);

      $data['end'] = true;
      $data['message'] = 'You have finished the course!';
      return new Response(json_encode($data));
    }
    $data['question'] = $this->get('question.service')->getById($data['random'])[0];
    $data['question'] = $this->getComponents($data['question'], $redis);

    $redis->set('user-'.$user.',course-'.$data['course'], json_encode($data));

    return new Response(json_encode($data));
  }

  private function checkAnswer($course, $data) {
    $status = false;
    if ( !isset($data["answer"]) ) {
      return $status;
    }

    $answer = $data["answer"];
    if ( isset($course['answer']) ) {
      if ($course['answer'] == $answer) {
        $status = true;
      }

      if ( $status!==true && isset($data['patterns']) ) {
        foreach ($data['patterns'] as $key => $value) {
          if ($value['answer'] == $answer) {
            $status = true; 
          }
        }
      }
    }

    if (isset($course['question']['chooses'])) {
      foreach ($course['question']['chooses'] as $key => $value) {
        if ($value['status'] == true && $value['answer'] == $answer) {
          $status = true; 
        }
      }
    }

    return $status;
  }

  private function setScore($redis) {
    $type = $redis['question']['type'];
    $redis['score']['total'] += 1;

    if ($redis['question']['choose']) {
      $redis['score']['choose'] += 1;
    }
    if ($redis['question']['sound']) {
      $redis['score']['sound'] += 1;
    }
    if ($redis['question']['image']) {
      $redis['score']['image'] += 1;
    }
    if ($type==0||$type==1||$type==2||$type==3) {
      $redis['score']['text'] += 1;
    } 

    switch ( $type ) {
      case 0:
        $redis['score']['stt'] += 1;
        break;
      case 1:
        $redis['score']['stc'] += 1;
        break;
      case 2:
        $redis['score']['tt'] += 1;
        break;
      case 3:
        $redis['score']['tc'] += 1;
        break;
      case 4:
        $redis['score']['st'] += 1;
        break;
      case 5:
        $redis['score']['sc'] += 1;
        break;
      case 6:
        $redis['score']['it'] += 1;
        break;
      case 7:
        $redis['score']['ic'] += 1;
        break;
      case 8:
        $redis['score']['ist'] += 1;
        break;
      case 9:
        $redis['score']['isc'] += 1;
        break;
    }
    
    return $redis;
  }

  private function random($data) {
    $key = array_rand($data['questionsId']);
    if (is_null($key)) {
      $data['random'] = null;
      return $data;
    }
    $data['random'] = $data['questionsId'][$key];
    unset($data['questionsId'][$key]);

    return $data;
  }

  private function getComponents($data, $redis) {
    $type = $data['type'];
    if ( $type==0||$type==2||$type==4||$type==6||$type==8 ) {
      $data = $this->get('question.service')->getPatterns($data['id'])[0];
    }

    if ( $data['choose'] ) {
      $data = $this->get('question.service')->getChooses($data['id'])[0];
    }

    if ( $data['image'] ) {
      $id = $this->get('image.service')->getImage($data['id']);
      $data["images"] = json_decode($redis->get('img-'.$id[0]->getId()), true);
    }

    return $data;
  }


}
