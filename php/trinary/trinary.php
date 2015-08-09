<?php

function toDecimal($input) {
  // all numbers must be 0, 1, or 2
  if (preg_match('/[^0-2]/', $input)) {
    return 0;
  }
  // split input
  $input = str_split($input);
  // reverse foreach += #*3^array element number
  $output = 0;
  for ($length = count($input), $i = $length - 1; $i >= 0; $i--) {
    $output += $input[$i] * pow(3, $length - $i - 1);
  }
  return $output;
}
