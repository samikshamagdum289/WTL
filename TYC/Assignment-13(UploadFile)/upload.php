<?php
if (isset($_FILES['myfile'])) {
    $folder = "uploads/";
    
    // Create the uploads folder if it doesn't exist
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    $file = $_FILES['myfile']['name'];
    $temp = $_FILES['myfile']['tmp_name'];

    if (move_uploaded_file($temp, $folder . $file)) {
        echo "File uploaded successfully!";
    } else {
        echo "Failed to upload file.";
    }
}
?>
