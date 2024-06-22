<?php
$con=new mysqli('localhost','root','2214ss',
'bootstrapcrud');

if(!$con){
   
    die(mysqli_error($con));
}
?>