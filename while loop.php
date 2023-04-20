<?php
  $i=0;
  while ($i < 10) {
    # code...
    echo $i * 10;
    echo "<br>";
    $i++;
  }

  
  
  echo '$i='.$i;

  echo '<hr>';

$i=0;
  do {
    # code...
    echo $i * 10;
    echo "<br>";
    $i++;

  } while ($i < 10);
  echo '$i='.$i;
  echo '<hr>';

  $i=3;
  $j=2;

  $num=true;
  while ($j< $i) {
    # code...
    ($i % $j ==0);
    $num=false;
    break;
  }
  if ($num) {
    # code...
    echo '質數';

  }
  else {
    
    echo'不是';
  }


