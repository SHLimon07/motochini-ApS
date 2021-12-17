<?php
$servername = "localhost";
$username = "shlimonc_motochini";
$password = "motochini-aps";
$dbname = "shlimonc_motochini";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>