<?php

class Game {
  private $throws;
  private $current;

  function __construct() {
    $this->throws = array();
    $this->current = 0;
  }

  function roll($pins) {
    $this->throws[] = $pins;
    $score = 0;
    $frame = 0;

    for ($i = 0; $i < 10; $i++) {
      if($this->testStrike($frame)) {
        $score += $this->throws[$frame + 1] + $this->throws[$frame + 2] + 10;
        $frame++;
      } elseif ($this->testSpare($frame)) {
        $score += $this->throws[$frame + 1] + 10;
        $frame += 2;
      } else {
        $score += $this->throws[$frame] + $this->throws[$frame + 1];
      }
    }

    echo "throw = " . $this->throw . "\n";
    echo "score = " . $this->score . "\n";
  }

  function score() {
    return $this->score;
  }
}
