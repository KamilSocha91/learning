<?php

namespace App\CourseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

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
  private $text = 0;

  /**
   * @var int
   */
  private $sound = 0;

  /**
   * @var int
   */
  private $choose = 0;

  /**
   * @var int
   */
  private $image = 0;

  /**
   * @var int
   */
  private $total = 0;

  /**
   * @var int
   */
  private $stt = 0;

  /**
   * @var int
   */
  private $stc = 0;

  /**
   * @var int
   */
  private $tt = 0;

  /**
   * @var int
   */
  private $tc = 0;

  /**
   * @var int
   */
  private $st = 0;

  /**
   * @var int
   */
  private $sc = 0;

  /**
   * @var int
   */
  private $it = 0;

  /**
   * @var int
   */
  private $ic = 0;

  /**
   * @var int
   */
  private $ist = 0;

  /**
   * @var int
   */
  private $isc = 0;

  /**
   * @var Score
   */
  private $user;

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
   * Set text
   *
   * @param integer $text
   *
   * @return Score
   */
  public function setText($text) {
    $this->text = $text;

    return $this;
  }

  /**
   * Get text
   *
   * @return int
   */
  public function getText() {
    return $this->text;
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

  /**
   * Set stt
   *
   * @param integer $stt
   *
   * @return Score
   */
  public function setSTT($stt)
  {
    $this->stt = $stt;

    return $this;
  }

  /**
   * Get stt
   *
   * @return int
   */
  public function getSTT()
  {
    return $this->stt;
  }

  /**
   * Set stc
   *
   * @param integer $stc
   *
   * @return Score
   */
  public function setSTC($stc)
  {
    $this->stc = $stc;

    return $this;
  }

  /**
   * Get stc
   *
   * @return int
   */
  public function getSTC()
  {
    return $this->stc;
  }

  /**
   * Set tt
   *
   * @param integer $tt
   *
   * @return Score
   */
  public function setTT($tt)
  {
    $this->tt = $tt;

    return $this;
  }

  /**
   * Get tt
   *
   * @return int
   */
  public function getTT()
  {
    return $this->tt;
  }

  /**
   * Set tc
   *
   * @param integer $tc
   *
   * @return Score
   */
  public function setTC($tc)
  {
    $this->tc = $tc;

    return $this;
  }

  /**
   * Get tc
   *
   * @return int
   */
  public function getTC()
  {
    return $this->tc;
  }

  /**
   * Set st
   *
   * @param integer $st
   *
   * @return Score
   */
  public function setST($st)
  {
    $this->st = $st;

    return $this;
  }

  /**
   * Get st
   *
   * @return int
   */
  public function getST()
  {
    return $this->st;
  }

  /**
   * Set sc
   *
   * @param integer $sc
   *
   * @return Score
   */
  public function setSC($sc)
  {
    $this->sc = $sc;

    return $this;
  }

  /**
   * Get sc
   *
   * @return int
   */
  public function getSC()
  {
    return $this->sc;
  }

  /**
   * Set it
   *
   * @param integer $it
   *
   * @return Score
   */
  public function setIT($it)
  {
    $this->it = $it;

    return $this;
  }

  /**
   * Get it
   *
   * @return int
   */
  public function getIT()
  {
    return $this->it;
  }

  /**
   * Set ic
   *
   * @param integer $ic
   *
   * @return Score
   */
  public function setIC($ic)
  {
    $this->ic = $ic;

    return $this;
  }

  /**
   * Get ic
   *
   * @return int
   */
  public function getIC()
  {
    return $this->ic;
  }

  /**
   * Set ist
   *
   * @param integer $ist
   *
   * @return Score
   */
  public function setIST($ist)
  {
    $this->ist = $ist;

    return $this;
  }

  /**
   * Get ist
   *
   * @return int
   */
  public function getIST()
  {
    return $this->ist;
  }

  /**
   * Set isc
   *
   * @param integer $isc
   *
   * @return Score
   */
  public function setISC($isc)
  {
    $this->isc = $isc;

    return $this;
  }

  /**
   * Get isc
   *
   * @return int
   */
  public function getISC()
  {
    return $this->isc;
  }

  /**
   * Set total
   *
   * @param integer $total
   *
   * @return Score
   */
  public function setTotal($total)
  {
    $this->total = $total;

    return $this;
  }

  /**
   * Get total
   *
   * @return int
   */
  public function getTotal()
  {
    return $this->total;
  }
}
