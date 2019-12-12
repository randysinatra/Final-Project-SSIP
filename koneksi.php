<?php
$servername = "localhost";
$username = "id11891639_root";
$password = "123456";
$database = "id11891639_tugas1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>