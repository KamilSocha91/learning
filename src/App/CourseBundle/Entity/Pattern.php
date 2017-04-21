<?php

namespace App\CourseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pattern
 */
class Pattern
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var string
   */
  private $answer;

  /**
   * @var Pattern
   */
  private $question;

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
   * Set answer
   *
   * @param string $answer
   *
   * @return Pattern
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
   * @return Sound
   */
  public function setQuestion ($question) {
      $this->question = $question;

      return $this;
  }
  
}

