<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Entity\CourseRepository;
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
    public function save($result) {
        try {
            $nodes = json_decode($result, true);
        } catch (\Exception $e) {
            throw new BadRequestHttpException("Corrupted json");
        }

        $this->courseRepository->save($nodes);
    }

    /**
     * Return Courses list
     *
     * @return Course|null
     */
    public function getAllCourses() {
        $query = $this->courseRepository->findAllCoursesQuery();

        return $query->getArrayResult();
    }

}
