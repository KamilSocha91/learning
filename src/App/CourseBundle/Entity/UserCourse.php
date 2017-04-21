<?php

namespace App\CourseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * UserCourse
 */
class UserCourse
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var User
   */
  private $user;

  /**
   * @var Course
   */
  private $course;

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
   * Get User
   *
   * @return ArrayCollection
   */
  public function getUser () {
      return $this->user;
  }

  /**
   * Set User
   *
   * @param ArrayCollection $user User instance
   *
   * @return UserCourse
   */
  public function setUser ($user) {
      $this->user = $user;

      return $this;
  }

    /**
   * Get Course
   *
   * @return ArrayCollection
   */
  public function getCourse () {
      return $this->course;
  }

  /**
   * Set Course
   *
   * @param ArrayCollection $course Course instance
   *
   * @return UserCourse
   */
  public function setCourse ($course) {
      $this->course = $course;

      return $this;
  }

}
