<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","mashaproject");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Display Member</title>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="bootstrap/js/bootstrap.js"></script>
        </head>
        <body>
        <div class="container">
            <h3 class="text-center">Display Member</h3>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <hr>
                    <form action="" method="post">
                        <label for=""><b>Employee_Number</b></label>
                        <input type="text" name="ENumber" value="<?php print $row['Employee_Number']?>" required class="form-control">
                        <label for=""><b>Surname</b></label>
                        <input type="text" name="Surname" value="<?php print $row['"Surname']?>" required class="form-control">
                        <label for=""><b>Other_names</b></label>
                        <input type="text" name="names" class="form-control" required value="<?php print $row['Other_names']?>">
                        <label for=""><b>phone_number</b></label>
                        <input type="text" name="phone number" class="form-control" required value="<?php print $row['phone_number']?>">
                        <label for=""><b>Occupational_post</b></label>
                        <input type="text" name="Occupational post" class="form-control" required value="<?php print $row['Occupational_post']?>">
                        <hr>
                        <div class="buttons">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>
        <?
}
mysqli_close($conn);
?>
