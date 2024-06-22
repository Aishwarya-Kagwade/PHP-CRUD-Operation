<?php
include 'connect.php';
if(isset($_POST['deletesend'])){
    $unique =  $_POST['deletesend']; // Sanitize input

    $sql = "DELETE FROM `crud` WHERE id = $unique"; // Correct SQL syntax
    $result = mysqli_query($con, $sql);

}
?>
