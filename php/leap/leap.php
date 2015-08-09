<?php

function isLeap($input) {
  if ($input % 4 === 0) {
    if ($input % 100 === 0 && $input % 400 === 0) {
      return true;
    } elseif ($input % 100 === 0) {
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}
