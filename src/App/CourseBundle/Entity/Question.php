<?php

namespace App\CourseBundle\Entity;

/**
 * Question
 */
class Question
{
	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var int
	 */
	private $type;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $answer;

	/**
	 * @var int
	 */
	private $difficulty;

  /**
   * @var Course
   */
  private $course;

  /**
   * @var ArrayCollection
   */
  private $chooses;

  /**
   * @var ArrayCollection
   */
  private $images;

  /**
   * @var ArrayCollection
   */
  private $sounds;

  public function __construct() {
    $this->chooses = new ArrayCollection();
    $this->images = new ArrayCollection();
    $this->sounds = new ArrayCollection();
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
	 * Set type
	 *
	 * @param integer $type
	 *
	 * @return Question
	 */
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return int
	 */
	public function getType()
	{
		return $this->type;
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
	 * Set answer
	 *
	 * @param string $answer
	 *
	 * @return Question
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
	 * Set difficulty
	 *
	 * @param integer $difficulty
	 *
	 * @return Question
	 */
	public function setDifficulty($difficulty)
	{
		$this->difficulty = $difficulty;

		return $this;
	}

	/**
	 * Get difficulty
	 *
	 * @return int
	 */
	public function getDifficulty()
	{
		return $this->difficulty;
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
   * @return Question
   */
  public function setCourse ($course) {
      $this->course = $course;

      return $this;
  }

}
