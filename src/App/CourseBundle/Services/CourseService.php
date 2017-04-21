<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\CourseRepository;
use App\CourseBundle\Entity\Course;

/**
 * Class CourseService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class CourseService  {

    /**
     * @var courseRepository
     */
    private $courseRepository;

    /**
     * CourseService constructor.
     *
     * @param courseRepository $courseRepository Course repository instance
     *
     */
    public function __construct (courseRepository $courseRepository) {
        $this->courseRepository = $courseRepository;
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
    public function save($name) {
        $course = $this->courseRepository->save($name);

        return $course;
    }

    /**
     * Return Courses list
     *
     * @return Course|null
     */
    public function getAll() {
        $query = $this->courseRepository->findAll();

        return $query;
    }


    /**
     * Return Courses list
     *
     * @return Course|null
     */
    public function getByUser() {
        $query = $this->courseRepository->findByUser();

        return $query;
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
  public function getById($id = null) {
    $query = $this->courseRepository->findById($id);

    return $query->getResult();
  }

}
