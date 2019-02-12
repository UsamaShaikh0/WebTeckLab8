<?php

function armstrongNumber($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } 
  else {
    return "False";
  }
}
echo "Is 370 Armstrong number? ".armstrongNumber(370);
echo "</br> Is 34 Armstrong number? ".armstrongNumber(34);
echo "</br>Is 8743 Armstrong number? ".armstrongNumber(8743);"</br>";
?>
