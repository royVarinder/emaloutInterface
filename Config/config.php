<?php
header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "root";
$password = "";
$db = "emalout";

// Create connection ===========================>
$conn = new mysqli($servername, $username, $password, $db);

// Check connection =================>
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//CONNECTION IS SUCCESSFULLY CONNECTED =================>
// echo "Connected successfully";
?>