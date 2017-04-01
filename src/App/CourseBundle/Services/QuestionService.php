<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\QuestionRepository;
use App\CourseBundle\Entity\Question;

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
     * Return questions
     *
     * @param integer $id Course id
     *
     * @throws \Exception
     */
    public function getQuestions($id = null) {
        dump($id);
        $query = $this->questionRepository->findByCourse($id);

        return $query->getResult();
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
    public function getQuestion($id = null) {
        $query = $this->questionRepository->findOneQuestionQuery($id);

        return $query->getOneOrNullResult();
    }

}
