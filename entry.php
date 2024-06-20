<?php
require("connect.php"); // Assuming this file connects to your database

// Fetching user inputs from POST data
$name = $_POST["name"];
$password = $_POST["password"];

// Query to select user data based on provided username
$data = "SELECT * FROM userdata WHERE Username='$name'";
$res = $conn->query($data); // Executing the query

if ($res->num_rows > 0) {
    // If at least one row is returned (username exists)
    $result = $res->fetch_assoc(); // Fetching the row as an associative array
    $storedPassword = $result['newpassword']; // Retrieving the hashed password from the database

    if ($storedPassword == $password) {
        // If the provided password matches the stored hashed password
        header('Location: welcome.php'); // Redirect to welcome.php
        exit(); // Ensure no further execution after redirection
    } else {
        // If passwords do not match
        echo '<script> alert("Password Is not Correct"); location.href="index.php";</script>';
        exit(); // Exit after displaying alert and redirecting
    }
} else {
    // If no rows were returned (username not found)
    header('Location: index.php'); // Redirect to index.php
    exit(); // Exit after redirection
}
?>
