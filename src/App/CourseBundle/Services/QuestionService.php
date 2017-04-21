<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\QuestionRepository;
use App\CourseBundle\Entity\Question;
use DoctrineExtensions\Query\Mysql;

/**
* Class QuestionService
*
* @author    Kamil Socha <kamil.socha@gmail.com>
*/
class QuestionService  {

  /**
   * @var QuestionRepository
   */
  private $questionRepository;

  /**
   * QuestionService constructor.
   *
   * @param QuestionRepository $questionRepository Question repository instance
   *
   */
  public function __construct (questionRepository $questionRepository) {
    $this->questionRepository = $questionRepository;
  }

  /**
   * Return patterns list
   *
   * @return patterns|null
   */
  public function getPatterns($id = null) {
      $query = $this->questionRepository->findPatternsById($id);

      return $query->getArrayResult();
  }

  /**
   * Return chooses list
   *
   * @return choose|null
   */
  public function getChooses($id = null) {
      $query = $this->questionRepository->findChoosesById($id);

      return $query->getArrayResult();
  }

  /**
   * Return questions
   *
   * @param integer $id Course id
   *
   * @throws \Exception
   */
  public function countAllByCourse($id = null) {
    $query = $this->questionRepository->countAllByCourse($id);

    return $query->getSingleScalarResult();
  }

  public function questionsId($id = null) {
    $query = $this->questionRepository->findIdsByCourse($id);

    return  array_column($query->getScalarResult(), "id");
  }

  /**
   * Return random question
   *
   * @param integer $id Course id
   *
   * @throws \Exception
   */
  public function getRandom($id = null) {
    $query = $this->questionRepository->findRandom($id);

    return $query->getArrayResult();
  }

  /**
   * Return question
   *
   * @param integer $id Question id
   *
   * @return Question|null
   *
   * @throws \Exception
   */
  public function getById($id = null) {
    $query = $this->questionRepository->findById($id);

    return $query->getArrayResult();
  }

    /**
   * Save entity
   *
   * @param array   $result Request data
   *
   * @return void
   *
   * @throws \Exception
   */
  public function save($data, $course) {
    $question = $this->questionRepository->save($data, $course);

    return $question;
  }

}
