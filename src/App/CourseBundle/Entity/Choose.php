<?php

namespace App\CourseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
* Choose
*/
class Choose
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var Question
   */
  private $question;

  /**
   * @var string
   */
  private $answer;

  /**
   * @var boolean
   */
  private $status;


  /**
   * Get id
   *
   * @return int
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Get Question
   *
   * @return ArrayCollection
   */
  public function getQuestion () {
      return $this->question;
  }

  /**
   * Set Question
   *
   * @param ArrayCollection $question Question instance
   *
   * @return Choose
   */
  public function setQuestion ($question) {
      $this->question = $question;

      return $this;
  }

  /**
   * Set answer
   *
   * @param string $answer
   *
   * @return Choose
   */
  public function setAnswer($answer)
  {
    $this->answer = $answer;

    return $this;
  }

  /**
   * Get answer
   *
   * @return string
   */
  public function getAnswer()
  {
    return $this->answer;
  }

  /**
   * Set status
   *
   * @param integer $status
   *
   * @return Question
   */
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  /**
   * Get status
   *
   * @return int
   */
  public function getStatus()
  {
    return $this->status;
  }

  
}
