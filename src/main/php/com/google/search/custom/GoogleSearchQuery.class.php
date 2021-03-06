<?php namespace com\google\search\custom;

/**
 * Query object
 *
 * @see   xp://com.google.search.custom.GoogleSearchClient
 * @test  xp://com.google.search.custom.unittest.GoogleSearchQueryTest
 */
class GoogleSearchQuery implements \lang\Value {
  protected $term= null;
  protected $start= 0;
  protected $num= 10;
  
  /**
   * Constructor
   *
   * @param   string term
   */
  public function __construct($term= null) {
    $this->term= $term;
  }
  
  /**
   * Sets term
   *
   * @param   string term
   * @return  self this
   */
  public function withTerm($term) {
    $this->term= $term;
    return $this;
  }
  
  /**
   * Gets term
   *
   * @return  string
   */
  public function getTerm() {
    return $this->term;
  }

  /**
   * Sets where to start at
   *
   * @param   int start
   * @return  self this
   */
  public function startingAt($start) {
    $this->start= $start;
    return $this;
  }
  
  /**
   * Gets where to start at
   *
   * @return  int
   */
  public function getStart() {
    return $this->start;
  }

  /**
   * Sets how many results to return
   *
   * @param   int num
   * @return  self this
   */
  public function yieldNumResults($num) {
    $this->num= $num;
    return $this;
  }
  
  /**
   * Gets how many results to return
   *
   * @return  int
   */
  public function getNumResults() {
    return $this->num;
  }

  /** @return string */
  public function hashCode() { return spl_object_hash($this); }

  /**
   * Compares another value to this object
   *
   * @param  var $value
   * @return int
   */
  public function compareTo($value) { return $this === $value ? 0 : 1; }

  /**
   * Creates a string representation of this object
   *
   * @return  string
   */
  public function toString() {
    return nameof($this).'(term= "'.$this->term.'", start= '.$this->start.', num= '.$this->num.')';
  }
}
