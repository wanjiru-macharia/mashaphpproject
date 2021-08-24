<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timing</title>
</head>
<body>
<div class="container">
    <table class="table-responsive-sm table-striped table-bordered">
        <tr>
        <tr>
            <th colspan="8" class="text-center">TIMING</th>
        </tr>
            <th>Employee_Number</th>
            <th>Names</th>
            <th>Occupational Post</th>
            <th>Time In</th>
            <th>Time Out</th>
        </tr>
        <?php
        error_reporting(0);
        $conn = mysqli_connect("localhost", "root", "", "mashaproject");
        if (!$conn) {
            die("Database Connection Error : " . mysqli_connect_error());
        }
        $timein = mysqli_real_escape_string($conn,$_POST['timein']);
        $timeout = mysqli_real_escape_string($conn,$_POST['timeout']);
        $sql = "select * from member where time_in >= '$timein' and time_out <= '$timeout'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php print $row['Employee_Number']; ?></td>
            <td><?php print $row['surname']; ?></td>
            <td><?php print $row['other_names']; ?></td>
            <td><?php print $row['phone_number']; ?></td>
            <td><?php print $row['Occupational_Post']; ?></td>
            <td><?php print $row['Time_In']; ?></td>
            <td><?php print $row['Time_Out']; ?></td>
        </tr>
            <?php
        }
        }
        mysqli_close($conn);
        ?>
    </table>
</div>
</body>
</html>
