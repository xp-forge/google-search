<?php namespace com\google\search\custom\types;

/**
 * Synonyms entry
 *
 * @see   xp://com.google.search.custom.types.Response#getSynonyms
 */
class Synonyms implements \lang\Value {
  protected $suggestions= [];
  
  /**
   * Adds as suggestion
   *
   * @param   string suggestion
   */
  #[@xmlmapping(element= 'OneSynonym/@q')]
  public function addSuggestion($suggestion) {
    $this->suggestions[]= $suggestion;
  }
  
  /**
   * Gets all suggestions
   *
   * @return  string[]
   */
  public function getSuggestions() {
    return $this->suggestions;
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
    return nameof($this).'('.sizeof($this->suggestions).')@'.xp::stringOf($this->suggestions);
  }
}
