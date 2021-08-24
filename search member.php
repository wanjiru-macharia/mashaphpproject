<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Employee Number</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-center">Select Employee Number</h3>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <hr>
            <form action="display%20member.php" method="post">
                <select name="ENumbersearch" id="" class="form-control" required>
                    <?php
                    $conn = mysqli_connect("localhost","root","","mashaproject");
                    if (!$conn){
                        die("Database Connection Error : " . mysqli_connect_error());
                    }
                    $sql = "select Employee_Number from member";
                    $result = $conn -> query($sql);
                    if ($result -> num_rows > 0){
                        while ($row = $result -> fetch_assoc()){
                            ?>
                            <option value="<?php print $row['Employee_NUmber'];?>"><?php print $row['Employee_NUmber'];?></option>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                <hr>
                <div class="buttons">
                    <button type="submit" class="btn btn-info">Search</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>