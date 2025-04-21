<?php

class Shape {
    public function draw() {
        echo "Drawing a shape<br>";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle<br>";
    }
}

class Square extends Shape {
    public function draw() {
        echo "Drawing a square<br>";
    }
}

// Create objects
$circle = new Circle();
$square = new Square();

// Same method name, different behavior
$circle->draw();   // Output: Drawing a circle
$square->draw();   // Output: Drawing a square

?>
