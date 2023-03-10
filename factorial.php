<!-- Use function recursion to find the factorial of 100 -->


<?php

// Number
$num = 3;

// Factorial current number is 1
$factorial = 1;

// First iteration, i is 1 and 1 is less than or equal to 3 so the factorial variable computation works this way 1 * 3 = 3
// Second iteration, i++ = i is 2 and is less than or equal to 3, so the factorial variable computation works this way factorial(3) * i(2) = 6
// Third iteration, i++ = i is now 3 and is not less than to num = 3 so the condition is no longer true, cut the loop and
for($i = 1; $i <= $num; $i++){
  $factorial *= $i;
}

// echo the factorial or result of the factorial number
echo "Factorial of $num is: $factorial";
?>