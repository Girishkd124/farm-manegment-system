<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrolight";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username from the URL parameter
$username = $_GET['username'];

// Delete the buyer with the specified username
$sql = "DELETE FROM buyer WHERE username = '$username'";

if ($conn->query($sql) === TRUE) {
    echo "Buyer deleted successfully";
} else {
    echo "Error deleting buyer: " . $conn->error;
}

$conn->close();

// Redirect back to the display buyers page
header("Location: display_buyers.php");
exit();
?>

