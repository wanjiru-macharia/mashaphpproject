<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h3 style="font-family: sans-serif" class="text-center"><u>Members</u></h3>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"></div>
        <hr>
        <form method="post" action="new%20member.php">
        <input type="text" name="ENumber" placeholder="Employee_Number" required class="form-control">
        <input type="text" name="Surname" placeholder="Surname" required class="form-control">
        <input type="text" name="names" placeholder="Other_names" required class="form-control">
        <input type="text" name="phone number" placeholder="phone_number" required class="form-control">
        <label for="">Occupational post<b></b></label>
        <select name="Occupational_Posts" id="" class="form-control" required>
            <option value="Managing Director">"Managing Director"</option>
            <option value="Human Resource Managment">"Human Resource Managment"</option>
            <option value="Accounts">"Accounts"</option>
            <option value="Receptionist">"Receptionist</option>
            <option value="Chef">"Chef"</option>
            <option value="Kitchen Clerk">"Kitchen Clerk"</option>
            <option value="Bartender">"Bartender"</option>
            <option value="Waiter">"Waiter"</option>
            <option value="Waitress">"Waitress"</option>
            <option value="janitor">"janitor"</option>
            <option value="Security">"Security"</option>
            <option value="Transport">"Transport"</option>
            <option value="Life Guard">"Life Guard"</option>
            <option value="Chauffer">"Chauffer"</option>
        </select>
        <hr>
        <?php
        error_reporting(0);
        $conn = mysqli_connect("localhost","root","","mashaproject");
        if (!$conn){
            die("Database Connection Error : " . mysqli_connect_error());
        }
        mysqli_close($conn);
        ?>
        <div class="buttons">
            <input type="submit" name="add new" value="new" class="btn btn-outline-primary">

            <a href="search%20member.php" class="btn btn-info">Update</a>
            &nbsp;
            <a href="member%20delete.php" class="btn btn-danger">Delete</a>
        </div>
    </div>
    </div>
</div>
</body>
</html>
