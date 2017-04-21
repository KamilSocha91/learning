<?php

namespace App\CourseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

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
   * @var ArrayCollection
   */
  private $questions;

  /**
   * @var ArrayCollection
   */
  private $usercourses;

  public function __construct() {
    $this->questions = new ArrayCollection();
    $this->usercourses = new ArrayCollection();
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
   * Get questions
   *
   * @return Questions
   */
  public function getQuestions()
  {
    return $this->questions;
  }

}
