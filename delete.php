<?php
include('connect.php');

$user_id = $_GET['id']; 

$del = "delete from `product` where id = '$user_id'";

$rest = mysqli_query($connect , $del);

if (!$rest) {
     die("connection failed");
}

header('location: fetch.php');

?>