<?php

namespace App\CourseBundle\Entity;

/**
 * Course
 */
class Course
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var string
   */
  private $name;

  /**
   * @var Course
   */
  private $score;

  /**
   * @var ArrayCollection
   */
  private $questions;

  public function __construct() {
    $this->questions = new ArrayCollection();
  }

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
   * Set name
   *
   * @param string $name
   *
   * @return Question
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get Score
   *
   * @return ArrayCollection
   */
  public function getScore () {
      return $this->score;
  }

  /**
   * Set Score
   *
   * @param ArrayCollection $score Score instance
   *
   * @return Node
   */
  public function setScore ($score) {
      $this->score = $score;

      return $this;
  }

}
