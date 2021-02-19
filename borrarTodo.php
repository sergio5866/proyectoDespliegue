<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "DROP DATABASE cabecera";
if ($conn->query($sql) === TRUE) {
  echo "BASE DE DATOS borrada";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
?>