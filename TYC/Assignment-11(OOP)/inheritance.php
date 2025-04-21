<?php

// Parent class
class Person {
    public $name;
    public $age;

    public function setDetails($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function showDetails() {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
    }
}

// Child class 
class Student extends Person {
    public $marks;

    public function setMarks($marks) {
        $this->marks = $marks;
    }

    public function showStudentInfo() {
        $this->showDetails();  // Call parent method
        echo "Marks: $this->marks<br>";
    }
}

// Create object of Student
$student1 = new Student();
$student1->setDetails("Samiksha Magdum", 21);    // Inherited method
$student1->setMarks(85);               // Child method
$student1->showStudentInfo();          // Display all info

?>
