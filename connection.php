<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","mashaproject");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
mysqli_close($conn);
?>