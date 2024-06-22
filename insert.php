
<?php
include 'connect.php';

// Assuming $con is your mysqli connection object from connect.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Extract POST data (not always recommended, but for simplicity)
    extract($_POST);
    
    // Escape variables for security (better use prepared statements)
    $name = mysqli_real_escape_string($con, $nameSend);
    $email = mysqli_real_escape_string($con, $emailSend);
    $mobile = mysqli_real_escape_string($con, $mobileSend);
    $place = mysqli_real_escape_string($con, $placeSend);
    
    // Prepare SQL statement (using backticks for table name and columns)
    $sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `place`)
            VALUES ('$name', '$email', '$mobile', '$place')";
    
    // Execute query and check for success
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Record added successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    
    // Close connection (optional, depending on your connect.php)
    mysqli_close($con);
}

?>
