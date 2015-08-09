<?php

function isLeap($input) {
  if ($input % 100 === 0 && $input % 400 != 0 || $input % 4 != 0) {
    return false;
  } else {
    return true;
  }
}
