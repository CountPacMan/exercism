<?php

function toDecimal($input) {
  // split input
  $input = str_split($input);
  // foreach += #*3^array element number
  $output = 0;
  for ($length = count($input), $i = $length - 1; $i >= 0; $i--) {
    $output += $input[$i] * pow(3, $length - $i - 1);
  }
  return $output;
}
