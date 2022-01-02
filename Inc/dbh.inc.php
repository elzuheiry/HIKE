<?php 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "hike_system";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection faild: " . mysqli_connect_error());
}