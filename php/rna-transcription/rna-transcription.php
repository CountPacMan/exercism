<?php

function toRna($input) {
  $rna = ['A' => 'U', 'T' => 'A', 'C' => 'G', 'G' => 'C'];

  $final = '';
  $input = str_split($input);

  foreach ($input as $letter) {
    $final .= $rna[$letter];
  }

  return $final;
}
