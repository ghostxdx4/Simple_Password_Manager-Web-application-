<?php
session_start();

$conn = new mysqli("localhost", "root", "", "advance_pass_manager");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$websiteName = $_POST['website_name'];

$sql = "SELECT * FROM passwords WHERE website_name = '$websiteName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['password'];
} else {
    echo "Password not found for the given website name.";
}

$conn->close();
?>
