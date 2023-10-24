<?php
// Database configuration
$db_host = "localhost"; // Database host
$db_username = "root"; // Database username
$db_password = ""; // Database password
$db_name = "eventplanningsystem"; // Database name

// Create a new MySQLi connection
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Optionally, you can set charset
$mysqli->set_charset("utf8");
?>
