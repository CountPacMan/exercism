<?php

class Game {
  private $score;
  private $frames;
  private $throw;

  function __construct() {
    $this->score = 0;
    $this->frames = [];
    $this->throw = 1;
  }

  function roll($pins) {
    // test for strike
    if ($this->score > )

    echo "throw = " . ($this->throw) . "\n";
    echo "score = " . $this->score . "\n";
  }

  function score() {
    return $this->score;
  }
}
