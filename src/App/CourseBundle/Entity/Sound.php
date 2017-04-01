<?php

namespace App\CourseBundle\Entity;

/**
* Sound
*/
class Sound
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var string
   */
  private $text;

  /**
   * @var Sound
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
   * Set text
   *
   * @param string $text
   *
   * @return Sound
   */
  public function setText($text)
  {
    $this->text = $text;

    return $this;
  }

  /**
   * Get text
   *
   * @return string
   */
  public function getText()
  {
    return $this->text;
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
