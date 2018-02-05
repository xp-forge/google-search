<?php namespace com\google\search\custom\types;

/**
 * Keymatches entry
 *
 * @see   xp://com.google.search.custom.types.Response#getKeyMatches
 */
class KeyMatch implements \lang\Value {
  protected $url= '';
  protected $text= '';
  
  /**
   * Sets URL
   *
   * @param   string url
   */
  #[@xmlmapping(element= 'GL')]
  public function setUrl($url) {
    $this->url= $url;
  }

  /**
   * Gets URL
   *
   * @return  string url
   */
  public function getUrl() {
    return $this->url;
  }

  /**
   * Sets text
   *
   * @param   string text
   */
  #[@xmlmapping(element= 'GD')]
  public function setText($text) {
    $this->text= $text;
  }

  /**
   * Gets text
   *
   * @return  string text
   */
  public function getText() {
    return $this->text;
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
   * Creates a string representation of this result set
   *
   * @return  string
   */
  public function toString() {
    return nameof($this).'(url= '.$this->url.', "'.$this->text.'")';
  }
}
