<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-center">Delete member</h3>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <hr>
            <?php
            error_reporting(0);
            $conn = mysqli_connect("localhost","root","","mashaproject");
            if (!$conn){
                die("Database Connection Error : " . mysqli_connect_error());
            }
          $Employee_Number=mysqli_real_escape_string($conn,$_POST['ENumber']);

       $sql="delete from member where Employee_Number=$'Employee_Number'";
            if ($conn -> query($sql) == true){
                print "<p>Member removed successfully</p>";
                print "<a href='member.php' class='btn btn-danger'>Delete Other Member</a>";
            }
            else{
                print "<p>Member not deleted</p>";
                print "<a href='member.php' class='btn btn-outline-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>