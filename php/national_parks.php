<?php

// Get new instance of MySQLi object
$mysqli = @new mysqli('127.0.0.1', 'corey', 'password', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Retrieve a result set using SELECT
$result = $mysqli->query("SELECT name,location,description, date_established, area_in_acres FROM national_parks");


if (isset($_GET['sort'])) {
	$key = $_GET['sort'];
	$result = $mysqli->query("SELECT name,location,description, date_established, area_in_acres FROM national_parks ORDER BY $key");
}

if (isset($_GET['dessort'])) {
	$key = $_GET['dessort'];
	$result = $mysqli->query("SELECT name,location,description, date_established, area_in_acres FROM national_parks ORDER BY $key DESC");
}
?>


