<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Entity\QuestionRepository;
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
     * @param integer $id Question id
     *
     * @throws \Exception
     */
    public function getQuestions($id = null) {
        $query = $this->questionRepository->findQuestionsByQuestionId($id);

        return $query->getResult();
    }

    /**
     * Return question
     *
     * @param integer $questionId Question id
     *
     * @return Question|null
     *
     * @throws \Exception
     */
    public function getQuestion($questionId = null) {
        $query = $this->questionRepository->findOneQuestionQuery($questionId);

        return $query->getOneOrNullResult();
    }

    /**
     * Return questions
     *
     * @param integer $id Question id
     *
     * @throws \Exception
     */
    public function getQuestionChildrens($questionId = null, $id = null) {
        $query = $this->questionRepository->findAllQuestionInRowQuery($questionId, $id);

        return $query->getResult();
    }

}
