<?php

if (!isset($_POST['type'])){
// Form to allow the user to enter a new DOMDocumentType
include 'typeForm.html.php';
exit();
}

// Connect to database
include '../../Model/connection.php';

// Retrieve data and sanitze
$type = mysqli_real_escape_string($connection, $_POST['type']);

// Create the query
$query = "INSERT INTO types (description) VALUES ('$type')";

// Execute the querey
$results = mysqli_query($connection, $query);

if (!$results) {
	$output = "An error has occurred.";
	include 'error.html.php';
	exit();
	}
	
	else{
		header('Location: ../');
	}
	
?>