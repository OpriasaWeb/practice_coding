<!-- Merge two sorted arrays    nums1   nums2 -->
<?php


// Set an array
$num1 = [2, 44, 35, 3, 2, 9, 46, 90, 51];
$num2 = [24, 4, 32, 31, 26, 92, 6, 9, 1];

// Sort both the array
sort($num1);
sort($num2);

// Combine or merge two arrays
$merge_array = array_combine($num1, $num2);

echo "<pre>";
print_r($merge_array);
?>