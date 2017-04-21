<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\PatternRepository;
use App\CourseBundle\Entity\Pattern;

/**
 * Class PatternService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class PatternService  {

    /**
     * @var patternRepository
     */
    private $patternRepository;

    /**
     * PatternService constructor.
     *
     * @param patternRepository $patternRepository Pattern repository instance
     *
     */
    public function __construct (patternRepository $patternRepository) {
        $this->patternRepository = $patternRepository;
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
  public function save($data, $quesiton) {
    $this->patternRepository->save($data, $quesiton);
  }

}
