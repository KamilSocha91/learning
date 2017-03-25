<?php

namespace App\CourseBundle\Entity;

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
   * @return Node
   */
  public function setQuestion ($question) {
      $this->question = $question;

      return $this;
  }
  
}
