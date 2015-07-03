<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b) {
  $a = str_split($a);
  $b = str_split($b);

  if ( count($a) != count($b) ) {
    throw new InvalidArgumentException("DNA strands must be of equal length.");
  }
  
  $count = 0;
  for ( $i = 0; $i < count($a); $i++ ) {
    if ( $a[$i] != $b[$i] ) {
      $count++;
    }
  }

  return $count;
}
