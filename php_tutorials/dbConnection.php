<?php
// Object-Oriented DB-Connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yourDBname";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Kill connection
$conn->close();
?>