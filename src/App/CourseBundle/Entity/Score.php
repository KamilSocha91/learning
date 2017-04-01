<?php

namespace App\CourseBundle\Entity;

/**
 * Score
 */
class Score
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var int
   */
  private $write;

  /**
   * @var int
   */
  private $sound;

  /**
   * @var int
   */
  private $choose;

  /**
   * @var int
   */
  private $image;

  /**
   * @var Score
   */
  private $user;

  /**
   * @var ArrayCollection
   */
  private $courses;

  public function __construct() {
    $this->courses = new ArrayCollection();
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
   * @return Score
   */
  public function setUser ($user) {
      $this->user = $user;

      return $this;
  }

  /**
   * Set write
   *
   * @param integer $write
   *
   * @return Score
   */
  public function setWrite($write)
  {
    $this->write = $write;

    return $this;
  }

  /**
   * Get write
   *
   * @return int
   */
  public function getWrite()
  {
    return $this->write;
  }

  /**
   * Set sound
   *
   * @param integer $sound
   *
   * @return Score
   */
  public function setSound($sound)
  {
    $this->sound = $sound;

    return $this;
  }

  /**
   * Get sound
   *
   * @return int
   */
  public function getSound()
  {
    return $this->sound;
  }

  /**
   * Set choose
   *
   * @param integer $choose
   *
   * @return Score
   */
  public function setChoose($choose)
  {
    $this->choose = $choose;

    return $this;
  }

  /**
   * Get choose
   *
   * @return int
   */
  public function getChoose()
  {
    return $this->choose;
  }

  /**
   * Set image
   *
   * @param integer $image
   *
   * @return Score
   */
  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }

  /**
   * Get image
   *
   * @return int
   */
  public function getImage()
  {
    return $this->image;
  }

}
