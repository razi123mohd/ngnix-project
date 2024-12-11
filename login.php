<?php
session_start();

// Define valid user credentials
$valid_user = "redteam";
$valid_password = "redteam123";
$valid_user = "razi";
$valid_password = "razi123";


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_user && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit();
    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>
