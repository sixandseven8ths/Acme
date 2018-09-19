<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Acme/Model/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/Acme/Model/connection.php';

// Add button has been pressed
if (isset($_GET['add'])){
	if (isset($_POST['first_name'])){
		// Add the customer to the database
		require 'AddCustomer/index.php';
	}else{
		// Show the customer form
		include 'Add/index.php';
		exit();
	}
}else{
	$customers = getCustomers();

	include 'customer.html.php';
}