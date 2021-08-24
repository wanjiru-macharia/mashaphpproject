<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-center">Update Member</h3>
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
            $Employee_number = mysqli_real_escape_string($conn,$_POST['ENumber']);
            $surname = mysqli_real_escape_string($conn,$_POST['Surname']);
            $Other_names = mysqli_real_escape_string($conn,$_POST['nnames']);
            $Phone_number = mysqli_real_escape_string($conn,$_POST['phone number']);
            $Occupational_Posts = mysqli_real_escape_string($conn,$_POST['Occupational post']);

            $sql = "update member set surname  = '$surname ',Other_names = '$Other_names',Phone_number = '$Phone_number',Occupational_Posts =$Occupational_Posts
where Employee_number = '$Employee_number'";
            if ($conn -> query($sql) == true){
                print "<p>member details updated successfully</p>";
                print "<a href='member.php' class='btn btn-outline-info'>Update Member</a>";
            }
            else{
                print "<p>Member details not updated</p>";
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