<?php
$servername = "localhost";
$username = "simple";
$password = "simpleuser";
$database = "db_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>