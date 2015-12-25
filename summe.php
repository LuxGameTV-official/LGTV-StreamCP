<?php
error_reporting(-1);
$un = 1;
$azahl = 1;
$summe = 0;
$i = 1;
while($un == 1){
  $zahl2 = $azahl/2;
  $summe = $azahl + $zahl2;
  $azahl = $summe;
  print($summe.'<br>');
  $i = $i +1;
  if($i > 10000){
    break;
  }
}

?>