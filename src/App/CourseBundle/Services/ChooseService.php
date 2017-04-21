<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\ChooseRepository;
use App\CourseBundle\Entity\Choose;

/**
 * Class ChooseService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class ChooseService  {

    /**
     * @var chooseRepository
     */
    private $chooseRepository;

    /**
     * ChooseService constructor.
     *
     * @param chooseRepository $chooseRepository Choose repository instance
     *
     */
    public function __construct (chooseRepository $chooseRepository) {
        $this->chooseRepository = $chooseRepository;
    }

    /**
     * Return chooses list
     *
     * @return choose|null
     */
    public function getByQuestionId($id = null) {
        $query = $this->chooseRepository->findChooses($id);

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
  public function save($data, $quesiton) {
    $this->chooseRepository->save($data, $quesiton);
  }

}
