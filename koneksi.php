<?php
$servername = "localhost";
$username = "root"; // Adjust if your database username is different
$password = ""; // Adjust if your database password is set
$database = "pemrograman_web";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

?>