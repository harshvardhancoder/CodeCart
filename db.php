<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ecom";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db,4306);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>