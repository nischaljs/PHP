<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Connection to DB failed: " . mysqli_connect_error());
}

// Create database only if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully or already exists";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn, "myDB");



?>
