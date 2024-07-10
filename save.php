<?php

$server ="127.0.0.1";
$username ="root";
$password ="";
$dbname ="mynewdb";

$con = mysqli_connect($server,$username,$password,$dbname);


if(!$con)
{
    echo "not connected";
}

//start

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['number'];
$email = $_POST['email'];
$feedback = $_POST['message'];

$sql = "INSERT INTO `test`(`name`, `age`, `number`, `email`, `feedback`)
 VALUES ('$name','$age','$phone','$email','$feedback')";

$result= mysqli_query($con, $sql);

if($result)
{
    header("Location: Thankyou.html");
    exit();
}
else{
    echo "query failed...!";
}



?>
