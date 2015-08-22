<?php

Class Clock {
  private $time;

  public __construct($input) {
    $this->time = $input;
  }

  public __toString() {
    return idate('H', $this->time);
  }
}
