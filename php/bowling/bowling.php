<?php

class Game {
  private $frames;
  private $throw;

  function __construct() {
    $this->frames = [];
    $this->throw = 1;
  }

  function roll($pins) {
    $current = count($this->frames);
    if ($current > 2) {
      // test for previous strike that is ready to count
      if ($this->frames[$current - 2] === 'X') {
        $this->frames[$current - 2] = 10 + $this->frames[$current - 1] + $pins;
        $this->frames[] = $pins;
      }
      // test for previous strike not ready to count
      elseif ($this->frames[$current - 1] === 'X') {
        $this->frames[] = $pins;
      }
      // test for previous spare
      elseif ($this->throw === 2 && $this->frames[$current - 1] + $pins === 10) {
        $this->frames[] = $pins;
      }
    } elseif ($current === 1) {
      if ($this->frames[1] === 10) {
        // strike
      } elseif ($this->frames[] )
    }


    echo "throw = " . $this->throw . "\n";
    echo "score = " . $this->score . "\n";
  }

  function score() {
    return $this->score;
  }
}
