<?php
include('connect.php');

$user_id = $_GET['id'];

$restore = "UPDATE `product` SET status = '1' where id = '$user_id' ";
$sqlconn = mysqli_query($connect, $restore);
if($sqlconn){
    
    header('location:fetch.php');
}
else{
    echo "query failed";
}
?>


?>