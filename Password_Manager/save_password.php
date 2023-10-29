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

if(isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $websiteName = $_POST['website_name'];
    $password = $_POST['password'];

 $sql = "INSERT INTO passwords (user_id, website_name, password) VALUES ('$userId', '$websiteName', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: welcome.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "User session not found. Please log in to save passwords.";
}

$conn->close();
?>