<?php

Class Clock {
  private $hours;
  private $minutes;

  function __construct($hours, $minutes = 0) {
    $this->hours = $hours;
    $this->minutes = $minutes;
  }

  function __toString() {
    // echo $this->hours . ":" . $this->minutes;
    return date("H:i", mktime($this->hours, $this->minutes));
  }

  function add($input) {
    // echo $this->hours . $this->minutes . "\n";
    $this->minutes += $input;
    // echo $this->hours . $this->minutes . "\n";
  }
}
