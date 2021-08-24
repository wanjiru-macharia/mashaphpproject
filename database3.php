<?php
$conn = mysqli_connect("localhost","root","","mashaproject");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
$sql = "create table Members(
    Employee_Number varchar (255) not null,
    primary key (Employee_Number),
    Surname varchar (255) not null,
    Other_names varchar (255) not null,
    phone_number varchar (255) not null,
    Occupational_post varchar (255) not null
)";
if ($conn -> query($sql) == true){
    print "Table created successfully";
}
else{
    print "Table exists";
}
mysqli_close($conn);