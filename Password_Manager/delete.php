<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advance_pass_manager";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$websiteName = $_POST['website_name'];

$sql = "DELETE FROM passwords WHERE website_name = '$websiteName'";
if ($conn->query($sql) === TRUE) {
	header("Location: welcome.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
