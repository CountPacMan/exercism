<?php

class Game {
  private $throws;
  private $current;

  function __construct() {
    $this->throws = array();
  }

  function roll($pins) {
    $this->throws[] = $pins;
  }

  function score() {
    $score = 0;
    $throwIndex = 0;

    for ($i = 0; $i < 10; $i++) {
      // strike test
      if($this->throws[$throwIndex] === 10) {
        $score += $this->throws[$throwIndex + 1] + $this->throws[$throwIndex + 2] + 10;
        $throwIndex++;
      }
      // spare test
      elseif ($this->throws[$throwIndex] + $this->throws[$throwIndex + 1] === 10) {
        $score += $this->throws[$throwIndex + 2] + 10;
        $throwIndex += 2;
      }
      else {
        $score += $this->throws[$throwIndex] + $this->throws[$throwIndex + 1];
        $throwIndex += 2;
      }
    }

    return $score;
  }
}
