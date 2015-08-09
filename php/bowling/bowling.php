<?php

class Game {
  private $score;
  private $frame;
  private $special;
  private $backlog;
  private $throw;

  function __construct() {
    $this->score = 0;
    $this->frame = 1;
    $this->backlog = 0;
    $this->throw = 1;
  }

  function roll($pins) {
    // test for spare
    if ($this->throw === 2 && $this->backlog + $pins === 10) {
      $this->special = 'spare';
      $this->backlog += $pins;
      $this->frame++;
      $this->throw++;
    }
    // count up spare score
    elseif ($this->special === 'spare' && $this->throw === 3) {
      $this->score += $this->backlog + $pins;
      $this->backlog = $pins;
      $this->special = '';
      $this->throw = 2;
    }
    // no special case - increase score
    elseif ($this->throw === 2) {
      $this->score += $this->backlog + $pins;
      $this->backlog = 0;
      $this->frame++;
    }
    // on first throw
    else {
      $this->backlog += $pins;
      $this->throw++;
    }
  }

  function score() {
    return $this->score;
  }
}
