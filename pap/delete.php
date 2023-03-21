<?php
// Check if the ID parameter is set
if (isset($_POST['id'])) {
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "mydb");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Prepare a delete statement
  $sql = "DELETE FROM papousek WHERE id = ?";
  if ($stmt = mysqli_prepare($conn, $sql)) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Set the parameter values
    $id = $_POST['id'];

    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
      // Return success response
      echo "Record deleted successfully";
    } else {
      // Return error response
      echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
  }

  // Close connection
  mysqli_close($conn);
}
?>

