<?php

namespace App\CourseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

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
   * @var boolean
   */
  private $sound;

  /**
   * @var boolean
   */
  private $choose;

  /**
   * @var boolean
   */
  private $image;

	/**
	 * @var string
	 */
	private $title;

	/**
	 * @var string
	 */
	private $answer;

  /**
   * @var string
   */
  private $question;

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
  private $patterns;
  
  /**
   * @var ArrayCollection
   */
  private $sounds;

  public function __construct() {
    $this->chooses = new ArrayCollection();
    $this->images = new ArrayCollection();
    $this->sounds = new ArrayCollection();
    $this->patterns = new ArrayCollection();
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
   * Set sound
   *
   * @param integer $sound
   *
   * @return Question
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
   * @return Question
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
   * @return Question
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
  
	/**
	 * Set title
	 *
	 * @param string $title
	 *
	 * @return Question
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
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
   * Set question
   *
   * @param string $question
   *
   * @return Question
   */
  public function setQuestion($question)
  {
    $this->question = $question;

    return $this;
  }

  /**
   * Get question
   *
   * @return string
   */
  public function getQuestion()
  {
    return $this->question;
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
