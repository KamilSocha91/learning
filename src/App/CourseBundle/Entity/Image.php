<?php

namespace App\CourseBundle\Entity;

/**
* Image
*/
class Image
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
  private $base64;

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
   * Set base64
   *
   * @param string $base64
   *
   * @return Sound
   */
  public function setBase64($base64)
  {
    $this->base64 = $base64;

    return $this;
  }

  /**
   * Get base64
   *
   * @return string
   */
  public function getBase64()
  {
    return $this->base64;
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

