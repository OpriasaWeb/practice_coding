<!-- Binary search using recursion -->

<?php

function binsearch($x,$a){

  // Sort the x value first otherwise binary search won't work
  sort($x);

  // Set left variable for the first index of array
  $l = 0;

  // Set right variable for the last part index of array
  $r = count($x) - 1;

  // condition for our while loop
  $result = false;

  while($l < $r && !$result){
    $mid = (int) round(($l + $r) / 2); // index of middle value in array

    if($x[$mid] == $a){
      $result = true;
      echo "\n Value: $x[$mid] is true.";
    } elseif($x[$mid] < $a){
      $l = $mid + 1;
    } else{
      $r = $mid - 1;
    }
  }

  if(!$result){
    echo "\n$a was not found.";
  }

}

// Let's try a few things: 

// Exist in array
binsearch([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 5);

echo "<br>";
echo "<br>";
// Not exist in array
binsearch([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 13);
?>