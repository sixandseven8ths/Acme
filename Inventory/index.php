<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/Acme/Model/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/Acme/Model/connection.php';

$descriptions = array();
$types = getInventoryTypes();

if (isset($_POST['type_id'])){
	
	// Call the function to retrieve inventory
	$type_id = (int) $_POST['type_id'];
	$descriptions = getInventoryDescriptions($type_id);
}
include 'viewType.html.php';	
?>