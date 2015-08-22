<?php

Class Clock {
  private $time;

  function __construct($input) {
    $this->time = $input;
  }

  function __toString() {
    return date("H:i", mktime($this->time,0));
  }
}
