<?php

$servername = "103.203.95.42:3306";
$username = "angan";
$password = "1234";
$dbname = "angandb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>