<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Acme/Model/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/Acme/Model/connection.php';

$vehicles = array();
$customers = getCustomers();

if (isset($_POST['customer_ID'])){
	
	// Call the function to retrieve vehicles
	$customer_id = (int) $_POST['customer_ID'];
	$vehicles = getCustomerVehicles($customer_id);
	
}

include 'vehicle.html.php';