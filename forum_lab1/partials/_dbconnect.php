<?php
// script to connect to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "forum_db2";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
