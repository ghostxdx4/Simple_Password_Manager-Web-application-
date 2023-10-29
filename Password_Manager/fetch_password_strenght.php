<?php
session_start();

$conn = new mysqli("localhost", "root", "", "advance_pass_manager");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$websiteName = $_POST['website_name'];

$sql = "SELECT password FROM passwords WHERE website_name = '$websiteName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['password'];

    $passwordStrength = calculatePasswordStrength($password);
    echo $passwordStrength;
} else {
    echo "No password found for the given website name.";
}

$conn->close();

function calculatePasswordStrength($password) {
    $length = strlen($password);
    if ($length < 6) {
        return "Weak";
    } elseif ($length >= 6 && $length < 10) {
        return "Medium";
    } else {
        return "Strong";
    }
}
?>
