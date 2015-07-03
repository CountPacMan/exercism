<?php

function from($date) {
  $to_add = new DateInterval('PT1000000000S');
  $new_date = date_add($date, $to_add);

  return $date;
}
