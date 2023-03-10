<!-- 2. Sum the value of array, Average the value of array -->

<?php

$arr = array(2, 5, 10, 24, 3, 52, 11, 19);

$sumArr = 0;

foreach($arr as $arr3){

  // Add everything up
  $sumArr += $arr3;
  

}

  echo "Sum of all the numbers in array:";
  echo "<br>";
  echo "$sumArr";
  echo "<br>";
  echo "<br>";

  // Result divided by len of array
  $avg = $sumArr / count($arr);

  // Return result
  echo "<br>";
  echo "Average of the value of an array:";
  echo "<br>";
  echo "$avg";
  echo "<br>";


?>