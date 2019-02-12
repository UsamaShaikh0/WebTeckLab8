<?php

function numPower($base, $exp) {
  $result = 1;
  for($i = 0; $i<$exp; $i++) {
    $result *= $base;
  }
  return $result;
}


echo "5 power 5 is: ". numPower(5,5);
?>