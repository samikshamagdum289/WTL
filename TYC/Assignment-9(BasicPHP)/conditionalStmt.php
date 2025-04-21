<?php
// Addition of 3 numbers
$a = 5;
$b = 10;
$c = 15;

$sum = $a + $b + $c;
echo "Sum of $a, $b and $c is $sum<br>";


// Factorial
$num = 4;
$fact = 1;

if ($num == 0 || $num == 1) {
    $fact = 1;
} else {
    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }
}
echo "Factorial of $num is $fact<br>";


//greatest of 3 numbers
$x = 12;
$y = 25;
$z = 18;

if ($x > $y && $x > $z) {
    echo "Greatest number is $x<br>";
} elseif ($y > $z) {
    echo "Greatest number is $y<br>";
} else {
    echo "Greatest number is $z<br>";
}
?>
