<?php

/** Retrieves all customers from database
	return $customers
	*/
	
function getCustomers(){
	global $connection;
	
	$query = "SELECT customer_ID, first_name, last_name, company FROM customers ORDER BY last_name, first_name";
	
	$results = mysqli_query($connection, $query);
	
	if (!$results) {
	$error = "Error retrieving customer data";
	include 'error.html.php';
	exit();
	}
	
	// Process the results
	while ($customer = mysqli_fetch_array($results)){
	$customers[] = array(
	'id' => $customer['customer_ID'],
	'first' => $customer['first_name'],
	'last' => $customer['last_name'],
	'company' => $customer['company']
	);
}

return $customers;

}

/** Retrieve the vehicles owned by a particular customer */
function getCustomerVehicles($id =1){
	global $connection;
	
	$id =(int)$id;
	
	$query = "SELECT vehicle_ID, description FROM vehicles WHERE customer_ID = $id";
	
	$results = mysqli_query($connection, $query);
	
	if (!$results) {
		$error = "Error retrieving vehicle data";
		include 'error.html.php';
		exit();
		}
		
		// Process the results
		while ($vehicle = mysqli_fetch_array($results)){
			$vehicles[] = array(
			'id' => $vehicle['vehicle_ID'],
			'vehicle' => $vehicle['description']
			);
		}
		
		return $vehicles;
	}
	

/** Retrieves inventory types from database
	*/
	
function getInventoryTypes(){
	global $connection;
	
	$query = "SELECT description, type_ID FROM types ORDER BY description";
	
	$results = mysqli_query($connection, $query);
	
	if (!$results) {
	$error = "Error retrieving customer data";
	include 'error.html.php';
	exit();
	}
	
	// Process the results
	while ($type = mysqli_fetch_array($results)){
	$types[] = array(
	'id' => $type['type_ID'],
	'description' => $type['description']
	);
}

return $types;

}

/** Retrieve the inventory descriptions */
function getInventoryDescriptions($id =1){
	global $connection;
	
	$id =(int)$id;
	
	$query = "SELECT description, type FROM inventory WHERE type = $id";
	
	$results = mysqli_query($connection, $query);
	
	if (!$results) {
		$error = "Error retrieving vehicle data";
		include 'error.html.php';
		exit();
		}
		
		// Process the results
		while ($description = mysqli_fetch_array($results)){
			$descriptions[] = array(
			'id' => $description['type'],
			'description' => $description['description']
			);
		}
		
		return $descriptions;
	}	