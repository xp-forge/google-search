<?php namespace com\google\search\custom\unittest;

use com\google\search\custom\GoogleSearchQuery;

class GoogleSearchQueryTest extends \unittest\TestCase {

  #[@test]
  public function can_create() {
    new GoogleSearchQuery();
  }

  #[@test]
  public function can_create_with_term() {
    new GoogleSearchQuery('Search term');
  }

  #[@test]
  public function withTerm_returns_self() {
    $fixture= new GoogleSearchQuery();
    $this->assertEquals($fixture, $fixture->withTerm('Search term'));
  }

  #[@test]
  public function startingAt_returns_self() {
    $fixture= new GoogleSearchQuery();
    $this->assertEquals($fixture, $fixture->startingAt(100));
  }

  #[@test]
  public function yieldNumResults_returns_self() {
    $fixture= new GoogleSearchQuery();
    $this->assertEquals($fixture, $fixture->yieldNumResults(20));
  }

  #[@test]
  public function getTerm() {
    $fixture= new GoogleSearchQuery();
    $this->assertEquals('Search term', $fixture->withTerm('Search term')->getTerm());
  }


  #[@test]
  public function getStart() {
    $fixture= new GoogleSearchQuery();
    $this->assertEquals(100, $fixture->startingAt(100)->getStart());
  }

  #[@test]
  public function getNumResults() {
    $fixture= new GoogleSearchQuery();
    $this->assertEquals(20, $fixture->yieldNumResults(20)->getNumResults());
  }
}