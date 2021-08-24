<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","");
if (!$conn){
    die("Database Connection Error:").mysqli_connect_error());
}
echo "Connection successful";
mysqli_close($conn);



