<?php
$conn=mysqli_connect("localhost","root","");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
echo "Connection successful";
$sql="create database mashaproject";
if ($conn -> query($sql) == true){
    echo "Database created susccesfully";
}
else" Database exists";
mysqli_close($conn);



