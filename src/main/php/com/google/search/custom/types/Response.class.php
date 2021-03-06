<?php namespace com\google\search\custom\types;

/**
 * Search result
 *
 * @see   http://www.google.com/cse/docs/resultsxml.html#results_xml_tag_GSP
 */
class Response implements \lang\Value {
  protected $time= 0.0;
  protected $query= '';
  protected $params= [];
  protected $res= null;
  protected $spellings= null;
  protected $synonyms= null;
  protected $keymatches= [];
  
  /**
   * Set time in seconds
   *
   * @param   float time
   */
  #[@xmlmapping(element= 'TM', type= 'double')]
  public function setTime($time) {
    $this->time= $time;
  }
  
  /**
   * Returns time taken (in seconds)
   *
   * @return  float
   */
  public function getTime() {
    return $this->time;
  }

  /**
   * Set query
   *
   * @param   string query
   */
  #[@xmlmapping(element= 'Q')]
  public function setQuery($query) {
    $this->query= $query;
  }
  
  /**
   * Returns query
   *
   * @return  string
   */
  public function getQuery() {
    return $this->query;
  }
  
  /**
   * Add a parameter
   *
   * @param   string name
   * @param   string value
   */
  #[@xmlmapping(element= 'PARAM', pass= ['@name', '@value'])]
  public function addParam($name, $value) {
    $this->params[$name]= $value;
  }
  
  /**
   * Gets a parameter's value
   *
   * @param   string name
   * @param   string default
   * @return  string
   */
  public function getParam($name, $default= null) {
    return isset($this->params[$name]) ? $this->params[$name] : $default;
  }

  /**
   * Set result set
   *
   * @param   com.google.search.custom.types.ResultSet res
   */
  #[@xmlmapping(element= 'RES', class= 'com.google.search.custom.types.ResultSet')]
  public function setResultSet($res) {
    $this->res= $res;
  }
  
  /**
   * Returns result set
   *
   * @return  com.google.search.custom.types.ResultSet
   */
  public function getResultSet() {
    return $this->res;
  }

  /**
   * Adds a keymatch
   *
   * @param   com.google.search.custom.types.KeyMatch keymatch
   */
  #[@xmlmapping(element= 'GM', class= 'com.google.search.custom.types.KeyMatch')]
  public function addKeyMatch($keymatch) {
    $this->keymatches[]= $keymatch;
  }

  /**
   * Returns keymatches
   *
   * @return  com.google.search.custom.types.KeyMatch[]
   */
  public function getKeyMatches() {
    return $this->keymatches;
  }

  /**
   * Sets spellings
   *
   * @param   com.google.search.custom.types.Spellings spellings
   */
  #[@xmlmapping(element= 'Spelling', class= 'com.google.search.custom.types.Spellings')]
  public function setSpellings($spellings) {
    $this->spellings= $spellings;
  }

  /**
   * Returns whether spellings are available
   *
   * @return  bool
   */
  public function hasSpellings() {
    return null !== $this->spellings;
  }

  /**
   * Returns spellings
   *
   * @return  com.google.search.custom.types.Spellings
   */
  public function getSpellings() {
    return $this->spellings;
  }

  /**
   * Sets synonyms
   *
   * @param   com.google.search.custom.types.synonyms synonyms
   */
  #[@xmlmapping(element= 'Synonyms', class= 'com.google.search.custom.types.Synonyms')]
  public function setSynonyms($synonyms) {
    $this->synonyms= $synonyms;
  }

  /**
   * Returns whether synonyms are available
   *
   * @return  bool
   */
  public function hasSynonyms() {
    return null !== $this->synonyms;
  }

  /**
   * Returns synonyms
   *
   * @return  com.google.search.custom.types.Synonyms
   */
  public function getSynonyms() {
    return $this->synonyms;
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
    return sprintf(
      "%s('%s', took %.3f seconds)@{\n".
      "  [params]     %s\n".
      "  [spellings]  %s\n".
      "  [synonyms]   %s\n".
      "  [keymatches] %s\n".
      "  [results]    %s\n".
      "}",
      nameof($this),
      $this->query,
      $this->time,
      str_replace("\n", "\n  ", \xp::stringOf($this->params)),
      str_replace("\n", "\n  ", \xp::stringOf($this->spellings)),
      str_replace("\n", "\n  ", \xp::stringOf($this->synonyms)),
      str_replace("\n", "\n  ", \xp::stringOf($this->keymatches)),
      str_replace("\n", "\n  ", \xp::stringOf($this->res))
    );
  }
}