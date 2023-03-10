<!-- 3. Reverse array -->

<?php

// Set an array
$arr = array(2, 5, 10, 24, 3, 52, 11, 19);


// Print the original set up of array
echo "Original list of array:";
echo "<br>";
foreach($arr as $arrList){
  echo $arrList;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "Reverse list of array:";
echo "<br>";

// Set where the new array would added
$newArr = array();

// First, make an outer loop that set the condition of
// how much the $arr is holding, in this case is 8
// based on the condition 8 - 1 = 7 and the array start from 0
// so the current number in count array is 7
for($i = 0; $i < count($arr) - 1; $i++){

  // in this inner loop
  // $j variable is holding the last part of the array
  // in this case the 19
  // condition, $j is currently 7 so $j is greater than the current $i which is 0
  // echo the 19 and decrement the $j from 7 to 6
  // check the condition again, true so print the 11 which is the 6 index in the array starting from 0 counting
  for($j = count($arr) - 1; $j >= $i; $j--){

    // echo the reverse array
    // push to the end the current index per iteration
    echo $arr[$j];
    

  }
  // Once meet the condition, break it because there is no need to increment the outer loop or else it will become redundancy.
  break;
  
  

} 




?>