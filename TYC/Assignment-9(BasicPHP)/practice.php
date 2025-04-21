<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Page</title>
    <style>
        body {
            background-color: #f0f8ff; 
            font-family: Arial, sans-serif;
            color: #333;
        }
        h2 {
            color: #007acc;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <h2>Welcome to My PHP Page</h2>

    <?php
    echo "<p>Hello DYPCET !!!</p>";

    $name = "Samiksha Magdum";
    $clgname = "D.Y.Patil college of Engineering ,Kolhapur";
    $class = "TY C CSE ";
    $rollno = 30;

    echo "<p>My Name is: $name</p>";
    echo "<p>College name is: $clgname</p>";
    echo "<p>Class: $class</p>";
    echo "<p>Roll no.: $rollno</p>";

    $a = 5;
    $b = 3;
    echo "<p>The sum of $a and $b is: " . ($a + $b) . "</p>";
    ?>

</body>
</html>
