<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>
</head>
<body>

<?php
//  class
class Student {
    public $name;
    public $age;
    public $marks;
    public $cgpa;

    // Constructor
    public function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    // Method
    public function displayDetails() {
        echo "<h2>Student Details</h2>";
        echo "<p><strong>Name:</strong> $this->name</p>";
        echo "<p><strong>Age:</strong> $this->age</p>";
        echo "<p><strong>Marks:</strong> $this->marks</p>";
        echo "<p><strong>CGPA:</strong> $this->cgpa</p>";
    }
}

// object 
$student2 = new Student("Samiksha Magdum", 21, 550, 9.5);
$student1 = new Student("Ravi Magdum", 20, 450, 8.5);

// Display 
$student1->displayDetails();
$student2->displayDetails();

?>

</body>
</html>
