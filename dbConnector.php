<?php

$servername = "103.203.95.42:3306";
$username = "angan";
$password = "1234";
$dbname = "angandb";
<<<<<<< HEAD
=======

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "angandb";

>>>>>>> 5c92b5e40711eff6c7a832edc93db9f50c87187d
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>