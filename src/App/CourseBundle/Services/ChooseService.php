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

        $this->chooseRepository->save($nodes);
    }

    /**
     * Return chooses list
     *
     * @return choose|null
     */
    public function getAllChooses() {
        $query = $this->chooseRepository->findAllChoosesQuery();

        return $query->getArrayResult();
    }

}
