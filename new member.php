<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"></div>
        <hr>
        <?php
        error_reporting(0);
        $conn = mysqli_connect("localhost", "root", "", "mashaproject");
        if (!$conn) {
            die("Database Connection Error : " . mysqli_connect_error());
        }
        $employee_number = mysqli_real_escape_string($conn, $_POST['ENumber']);
        $Surname = mysqli_real_escape_string($conn, $_POST['Surname']);
        $Other_names = mysqli_real_escape_string($conn, $_POST['names']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone number']);
        $Occupational_Posts = mysqli_real_escape_string($conn, $_POST['Occupational_Posts']);

        $sql = "insert into  posts(employee_number,Surname,Other_names,phone_number,Occupational_Posts)
values('$employee_number','$Surname','$Other_names','$phone_number','$Occupational_Posts')";
        if ($conn->query($sql) == true) {
            print "<p>New Member added successfully</p>";
            print "<a href='member.php' class='btn btn-outline-success'>Add New Member</a>";
        }
        else{
            print "<p>New Member not added</p>";
            print "<a href='member.php' class='btn btn-outline-success'>Retry</a>";
        }
        ?>
    </div>
</div>
</body>
</html>
