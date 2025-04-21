<?php

class MathOperations {
    public static $count = 0;

    public static function add($a, $b) {
        self::$count++;  // Access static property using self::
        return $a + $b;
    }
}

echo "5 + 10 = " . MathOperations::add(5, 10) . "<br>";
echo "2 + 3 = " . MathOperations::add(2, 3) . "<br>";
echo "Add function called " . MathOperations::$count . " times";

?>
