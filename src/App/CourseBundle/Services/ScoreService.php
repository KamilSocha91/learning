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

        $this->scoreRepository->save($nodes);
    }

    /**
     * Return scores list
     *
     * @return score|null
     */
    public function getAllScores() {
        $query = $this->scoreRepository->findAllScoresQuery();

        return $query->getArrayResult();
    }

}
