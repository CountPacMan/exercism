<?php

function squareOfSums($input, $multiplier = 1) {
  $output = 0;
  while ($input > 0) {
    $output += $input * $multiplier;
    $input--;
  }

  return $output * $output;
}

function sumOfSquares($input) {
  $output = 0;
  while ($input > 0) {
    $output += $input * $input;
    $input--;
  }

  return $output;
}

function difference($input) {
  return squareOfSums($input) - sumOfSquares($input);
}

?>
