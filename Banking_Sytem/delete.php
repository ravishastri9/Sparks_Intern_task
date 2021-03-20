<?php
include("connection.php");
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM customer_data WHERE id='$id'";
$data = mysqli_query($con, $query);

if($data)
{
    echo '<script> alert("deleted successfully")</script>';
    header("location:user.php");
    
}
?>