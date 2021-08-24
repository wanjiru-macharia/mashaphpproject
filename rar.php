<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign in</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php
error_reporting(0);
if(
$conn = mysqli_connect("localhost","root","","mashaproject");
         $Employee_number = mysqli_real_escape_string($conn,$_POST['ENumber']);
            $surname = mysqli_real_escape_string($conn,$_POST['Surname']);
            $Other_names = mysqli_real_escape_string($conn,$_POST['names']);
            $Phone_number = mysqli_real_escape_string($conn,$_POST['phone number']);
            $Occupational_Posts = mysqli_real_escape_string($conn,$_POST['Occupational post']);
 $query = "INSERT INTO `member`(`ENumber`, `Surname`, `names`, `phone number`) 
VALUES (null,'$Employee_number','$surname','$Other_names','$Phone_number','$Occupational_Posts')";
        $save = mysqli_query($conn,$query);
)
?>
</body>
</html>
