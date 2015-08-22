<?php

Class Clock {
  private $hours;
  private $minutes;

  function __construct($hours, $minutes = 0) {
    $this->hours = $hours;
    $this->minutes = $minutes;
  }

  function __toString() {
    return date("H:i", mktime($this->hours, $this->minutes));
  }

  function add($input) {
    $this->minutes += $input;
  }

  function sub($input) {
    $this->minutes -= $input;
  }


}
