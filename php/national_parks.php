<?php

// Get new instance of MySQLi object
$mysqli = @new mysqli('127.0.0.1', 'corey', 'password', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Retrieve a result set using SELECT
$result = $mysqli->query("SELECT name,location, date_established, area_in_acres,description FROM national_parks");


if (isset($_GET['sort'])) {
	$key = $_GET['sort'];
	$result = $mysqli->query("SELECT name,location, date_established, area_in_acres, description FROM national_parks ORDER BY $key");
}

if (isset($_GET['dessort'])) {
	$key = $_GET['dessort'];
	$result = $mysqli->query("SELECT name,location, date_established, area_in_acres, description FROM national_parks ORDER BY $key DESC");
}

//Check form submission for new park

if((!empty($_POST['addName'])) && (!empty($_POST['addLoc'])) && (!empty($_POST['addYear'])) && (!empty($_POST['addArea']))  && (!empty($_POST['addDes']))) {

	$stmt = $mysqli->prepare ("INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (?, ?, ?, ?, ?)");
	
	$stmt->bind_param("sssss", $_POST['addName'], $_POST['addLoc'], $_POST['addYear'], $_POST['addArea'], $_POST['addDes']);

	$stmt->execute();
	header("Location: national_parks_site.php");
    exit(0);
}
?>


