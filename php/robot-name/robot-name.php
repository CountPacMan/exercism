<?php

class Robot {
  private $name;

  function __construct() {
    // add two random letters to the name
    $this->name = $this->getLetter() . $this->getLetter();
    // add three random integers to the name
    while (strlen($this->name) < 5) {
      $this->name .= mt_rand(0, 9);
    }
  }

  function getLetter() {
    return chr(rand(97, 122));
  }

  function getName() {
    return $this->name;
  }
}
