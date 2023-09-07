<?php
require('connect.php');

$user_id = $_GET['id']; 

$del = "update product set status = '0' where id = '$user_id'";

$rest = mysqli_query($connect , $del);

if (!$rest) {
     die("connection failed");
}

// header('location:.php');
?>