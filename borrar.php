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
// sql to delete a record
$sql = "DELETE FROM personas WHERE id=1";
if ($conn->query($sql) === TRUE) {
  echo "registro borrado";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>