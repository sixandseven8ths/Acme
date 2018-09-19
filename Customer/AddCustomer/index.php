<?php

// Retrieve data and sanitize
$first = mysqli_real_escape_string($connection, $_POST['first_name']);
$last = mysqli_real_escape_string($connection, $_POST['last_name']);
$company = mysqli_real_escape_string($connection, $_POST['company']);
$address = mysqli_real_escape_string($connection, $_POST['address']);
$city = mysqli_real_escape_string($connection, $_POST['city']);
$state = mysqli_real_escape_string($connection, $_POST['state']);
$postal_code = mysqli_real_escape_string($connection, $_POST['zip']);
if (preg_match("/^([0-9]{5})(-[0-9]{4})?$/i",$postal_code)) {
    echo "Your Zip code is ok.";
} else {
    echo "Wrong Zip code.";
}
$email = mysqli_real_escape_string($connection, $_POST['email']);
if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$email)) {
    echo "Your email is ok.";
} else {
    echo "Wrong email address format";
}
	
// create the query
$query = "INSERT INTO customers (first_name, last_name, company, address, city, state, postal_code, email) 
			VALUES ('$first', '$last', '$company', '$address', '$city', '$state', '$postal_code', '$email')";
			
// Execute the query
$results = mysqli_query($connection, $query);

if (!results){
	$error = "Error adding new customer.";
	include '../Error/error.html.php';
	exit();
}
else{
	header('Location: ./');
}