<?php
$servername = "localhost:3306";
$username = "ahmadfai_faiz";
$password = "admingathering";
$dbname = "ahmadfai_gather";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
