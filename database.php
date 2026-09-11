<?php

$conn = new mysqli("localhost","root","","online_food_orderingsystem");

if(mysqli_connect_errno()){
    die("Connection failed: ".mysqli_connect_error());
}
?>