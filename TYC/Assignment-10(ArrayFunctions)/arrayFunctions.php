<?php

$fruits = array("Apple", "Banana", "Mango", "Orange");

//count
echo "Total fruits: " . count($fruits) . "<br>";

//push
array_push($fruits, "Grapes");
echo "After array_push(): " . implode(", ", $fruits) . "<br>";

// pop
array_pop($fruits);
echo "After array_pop(): " . implode(", ", $fruits) . "<br>";


// sort
sort($fruits);
echo "sorted array(): " . implode(", ", $fruits) . "<br>";


// reverse
$reversed = array_reverse($fruits);
echo "reversed array(): " . implode(", ", $reversed) . "<br>";


//merge
$colors = array("Red", "Green", "Blue");
$merged = array_merge($fruits, $colors);
echo "Merged array: " . implode(", ", $merged) . "<br>";


//sum()
$numbers = array(10, 20, 30);
echo "Sum of numbers: " . array_sum($numbers) . "<br>";
?>