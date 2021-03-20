<?php
session_start();
$con =mysqli_connect('localhost','root','');
if($con){
    echo "";
}
mysqli_select_db($con, 'db_bank');
?>