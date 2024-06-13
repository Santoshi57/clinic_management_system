<?php
session_start();
include '../db_connect.php'; // Assuming you have a file to connect to your database

$username = $_POST['username'];
$password = $_POST['password'];

// Validate user credentials
$query = "SELECT id, role FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    header("Location: home.php");
} else {
    echo "Invalid username or password.";
}
?>
