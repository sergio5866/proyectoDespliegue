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
$sql = "INSERT INTO personas (firstname, lastname, email)
VALUES ('Sergio', 'Gonzalo', 'sgonzalo@eepmad.com')";
if ($conn->query($sql) === TRUE) {
  echo "registro añadido";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>