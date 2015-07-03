<?php

function toRoman($input) {
  $final = '';

  while ($input > 0) {
    if ($input >= 1000) {
      $final .= "M";
      $input -= 1000;
    } elseif ($input >= 900) {
      $final .= "CM";
      $input -= 900;
    } elseif ($input >= 500) {
      $final .= "D";
      $input -= 500;
    } elseif ($input >= 400) {
      $final .= "CD";
      $input -= 400;
    } elseif ($input >= 100) {
      $final .= "C";
      $input -= 100;
    } elseif ($input >= 90) {
      $final .= "XC";
      $input -= 90;
    } elseif ($input >= 50) {
      $final .= "L";
      $input -= 50;
    } elseif ($input >= 40) {
      $final .= "XL";
      $input -= 40;
    } elseif ($input >= 10) {
      $final .= "X";
      $input -= 10;
    } elseif ($input == 9) {
      $final .= "IX";
      $input -= 9;
    } elseif ($input >= 5) {
      $final .= "V";
      $input -= 5;
    } elseif ($input == 4) {
      $final .= "IV";
      $input -= 4;
    } else {
      $final .= "I";
      $input -= 1;
    }
  }

  return $final;
}

?>
