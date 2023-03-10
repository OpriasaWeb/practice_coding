<!-- 54 number in total, write algorithm 54 number to random sequence 

-->

<?php
// Set a function
function random_shuffle($num)
{
  // Set an array
  $num_total = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54);

  // Initiate the random array with two (depends on how many you want to display, in this case is 2 which we set later once we call the function at the bottom).
  $random_key = array_rand($num_total, $num);

  echo "<br>";
  echo "First random number: ";
  echo $random_key[0];
  echo "<br>";
  echo "<br>";
  echo "Second random number: ";
  echo $random_key[1];
  echo "<br>";
} 

// Call the function with no parameter
random_shuffle(2);
?>