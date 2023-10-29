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

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    echo "Invalid username or password";
}

$conn->close();
?>
