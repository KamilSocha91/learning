<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\UserCourseRepository;
use App\CourseBundle\Entity\UserCourse;

/**
 * Class UserCourseService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class UserCourseService  {

  /**
   * @var usercourseRepository
   */
  private $usercourseRepository;

  /**
   * UserCourseService constructor.
   *
   * @param usercourseRepository $usercourseRepository UserCourse repository instance
   *
   */
  public function __construct (usercourseRepository $usercourseRepository) {
      $this->usercourseRepository = $usercourseRepository;
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
  public function save($user, $id) {
    $this->usercourseRepository->save($user, $id);
  }

      /**
   * Return course
   *
   * @param integer $id Course id
   *
   * @return Course|null
   *
   * @throws \Exception
   */
  public function getByUserCourse($user, $course) {
    $query = $this->usercourseRepository->findByUserCourse($user, $course);

    return $query->getResult();
  }

  /**
   * Return Courses list
   *
   * @return Course|null
   */
  public function getAll() {
    $query = $this->usercourseRepository->findAll();

    return $query;
  }

  /**
   * Return Courses list
   *
   * @return Course|null
   */
  public function getById($id) {
    $query = $this->usercourseRepository->findById($id);

    return $query;
  }

}
