<?php
$hostname ="localhost";
$user ="root";
$password ="";
$dbname ="ninalink_realtors";

//create connection
$conn =new mysqli($hostname, $user, $password, $dbname);
//check connection
if(mysqli_connect_error()){
    die("database connection failed:".mysqli_connect_error());
}