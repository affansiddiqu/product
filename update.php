<?php

require('connect.php');

$userid = $_POST['id'];
$username = $_POST['name'];
$usercat = $_POST['category'];
$userdes = $_POST['description'];

$update = "update product set Name = '$username' , Category = '$usercat', Description = '$userdes' where id = $userid";


$res = mysqli_query($connect , $update);
if (!$res) {
     die("connection failed");
}

header('location: fetch.php');

?>