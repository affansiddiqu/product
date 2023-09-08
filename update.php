<?php

require('connect.php');

$userid = $_POST['id'];
$username = $_POST['name'];
$usercat = $_POST['category'];
$userdes = $_POST['description'];
$pimg_name = $_FILES['img']['name'];
$pimg_tmp_name = $_FILES['img']['tmp_name'];
$pimg_size = $_FILES['img']['size'];


$update = "update product set Name = '$username' , Category = '$usercat', Description = '$userdes' , Image = '$pimg_name' where id = $userid";


$res = mysqli_query($connect , $update);
if (!$res) {
     die("connection failed");
}

    move_uploaded_file($pimg_tmp_name  , 'img/' . $pimg_name );


header('location: fetch.php');

?>