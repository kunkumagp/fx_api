<?php
include "../env.php";

$servername = $GLOBALS['DB_SERVER'];
$username = $GLOBALS['DB_USERNAME'];
$password = $GLOBALS['DB_PASSWORD'];
$dbname = $GLOBALS['DB_NAME'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>