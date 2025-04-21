<?php

// Abstract class
abstract class Animal {
    // Abstract method
    abstract public function sound();
}

// Child class
class Dog extends Animal {
    public function sound() {
        echo "Woof!<br>";
    }
}

// Create object
$dog = new Dog();
$dog->sound();  

?>
