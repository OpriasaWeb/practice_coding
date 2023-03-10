<!-- Binary search using recursion -->

<?php

  function binsearch($x,$a)
  {
    $i = 0;
    $result = false;

    while($i < count($x)){
      if($x[$i] == $a){
        echo "$x[$i] is TRUE \n";
        $result = true;
        break;
      }
      $i++;
    }
    if(!$result){
      echo "$a was not found.";
    }
  }

// Let's try a few things: 

// Exist in array
binsearch([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 2);

echo "<br>";
echo "<br>";
// Not exist in array
binsearch([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 13);


?>