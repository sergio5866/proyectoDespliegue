<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cabecera";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE personas SET firstname='Pepe' WHERE id=2";
if ($conn->query($sql) === TRUE) {
  echo "registro modificado";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>