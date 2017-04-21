<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\ScoreRepository;
use App\CourseBundle\Entity\Score;

/**
 * Class ScoreService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class ScoreService  {

  /**
   * @var scoreRepository
   */
  private $scoreRepository;

  /**
   * ScoreService constructor.
   *
   * @param scoreRepository $scoreRepository Score repository instance
   *
   */
  public function __construct (scoreRepository $scoreRepository) {
      $this->scoreRepository = $scoreRepository;
  }

  /**
   * Return score
   *
   * @param integer $id Score id
   *
   * @return Score|null
   *
   * @throws \Exception
   */
  public function getById($id = null) {
    $query = $this->scoreRepository->findUserById($id);

    return $query->getArrayResult();
  }

    /**
   * Return score
   *
   * @param integer $id Score id
   *
   * @return Score|null
   *
   * @throws \Exception
   */
  public function getObjectById($id = null) {
    $query = $this->scoreRepository->findById($id);

    return $query->getResult();
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
  public function save($user) {
    $this->scoreRepository->save($user);
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
  public function update($score, $query) {
    $this->scoreRepository->update($score, $query);
  }

}
