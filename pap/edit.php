<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$id = $_POST['id'];
$nazev = $_POST['nazev'];
$velikost = $_POST['velikost'];
$vek = $_POST['vek'];

// Update the row with the given ID
$sql = "UPDATE papousek SET nazev='$nazev', velikost='$velikost', vek='$vek' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  // Redirect to the main page
  header('Location: index.php');
} else {
  echo "Error updating row: " . $conn->error;
}

$conn->close();
?>

