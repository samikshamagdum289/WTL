<?php
$x = 10;
$y = 2;

echo "Original values:<br>";
echo "x = $x<br>";
echo "y = $y<br><br>";

$x = $y;
echo "x = y = $x<br>";

$x = 10;
$x += $y;
echo "x += y = $x<br>";

$x = 10;
$x -= $y;
echo "x -= y = $x<br>";

$x = 10;
$x *= $y;
echo "x *= y = $x<br>";

$x = 10;
$x /= $y;
echo "x /= y = $x<br>";


// Addition of three numbers
$a = 5;
$b = 10;
$c = 15;
$sum = $a + $b + $c;
echo "Addition of $a, $b and $c is: $sum<br><br>";

// Factorial of a number
$factNum = 5;
$factorial = 1;
for ($i = 1; $i <= $factNum; $i++) {
    $factorial *= $i;
}
echo "Factorial of $factNum is: $factorial<br><br>";

// Greatest among three numbers
$n1 = 25;
$n2 = 40;
$n3 = 15;

if ($n1 >= $n2 && $n1 >= $n3) {
    $greatest = $n1;
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    $greatest = $n2;
} else {
    $greatest = $n3;
}
echo "Greatest among $n1, $n2 and $n3 is: $greatest<br>";
?>
