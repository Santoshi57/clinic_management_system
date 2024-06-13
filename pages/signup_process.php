<?php
include '../db_connect.php'; // Assuming you have a file to connect to your database

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Insert new user
$query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
if (mysqli_query($conn, $query)) {
    echo "Sign up successful. <a href='login.php'>Login here</a>.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
