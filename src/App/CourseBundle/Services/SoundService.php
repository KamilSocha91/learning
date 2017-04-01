<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\SoundRepository;
use App\CourseBundle\Entity\Sound;

/**
 * Class SoundService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class SoundService  {

    /**
     * @var soundRepository
     */
    private $soundRepository;

    /**
     * SoundService constructor.
     *
     * @param soundRepository $soundRepository Sound repository instance
     *
     */
    public function __construct (soundRepository $soundRepository) {
        $this->soundRepository = $soundRepository;
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

        $this->soundRepository->save($nodes);
    }

    /**
     * Return Sounds list
     *
     * @return Sound|null
     */
    public function getAllSounds() {
        $query = $this->soundRepository->findAllSoundsQuery();

        return $query->getArrayResult();
    }

}
