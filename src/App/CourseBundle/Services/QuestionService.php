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
   * Return chooses list
   *
   * @return choose|null
   */
  public function getChooses($id = null) {
      $query = $this->questionRepository->findChoosesById($id);

      return $query->getArrayResult();
  }

  /**
   * Return image
   *
   * @return image|null
   */
  public function getImage($id = null) {
      $query = $this->questionRepository->findImageById($id);

      return $query->getArrayResult();
  }

  /**
   * Return image
   *
   * @return image|null
   */
  public function getBoth($id = null) {
      $query = $this->questionRepository->findBothById($id);

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

}
