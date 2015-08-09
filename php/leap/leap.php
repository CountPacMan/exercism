<?php

function isLeap($input) {
  // year is evenly divisible by 4
  $divBy4 = $input % 4 === 0;
  // year is evenly divisible by 100
  $divBy100 = $input % 100 === 0;
  // year is evenly divisible by 400
  $divBy400 = $input % 400 === 0;

  // leap year if input is evenly divisible by 4 but not by 100 unless also
  // evenly divisible by 400
  return $divBy100 ? $divBy400 : $divBy4;
}
