<?php

namespace App\UsersBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string
   */
  private $firstName;

  /**
   * @var string
   */
  private $lastName;

  /**
   * @var boolean
   */
  private $admin = false;

  /**
   * @var ArrayCollection
   */
  private $score;

  /**
   * @var ArrayCollection
   */
  private $usercourses;

  public function __construct() {
    parent::__construct();
    $this->score = new \Doctrine\Common\Collections\ArrayCollection();
    $this->usercourses = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
  * @return string
  */
  public function getFullName() {
    return (
        !empty($this->firstName) && !empty($this->lastName)
    ) ? sprintf('%s %s', $this->firstName, $this->lastName) : null;
  }

  /**
  * @return mixed
  */
  public function getFirstName() {
    return $this->firstName;
  }

  /**
  * @param mixed $firstName First name
  *
  * @return User
  */
  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  /**
  * @return mixed
  */
  public function getLastName() {
    return $this->lastName;
  }

  /**
  * @return Score
  */
  public function getScore() {
    return $this->score;
  }

  /**
  * @param mixed $lastName Last name
  *
  * @return User
  */
  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

    /**
   * Set admin
   *
   * @param integer $admin
   *
   * @return Question
   */
  public function setAdmin($admin)
  {
    $this->admin = $admin;

    return $this;
  }

  /**
   * Get admin
   *
   * @return int
   */
  public function getAdmin()
  {
    return $this->admin;
  }

  /**
   * Get username
   *
   * @return int
   */
  public function getUserName()
  {
    return $this->username;
  }

}
