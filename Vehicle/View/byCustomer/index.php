<?php 

include '../../../Model/connection.php';

$output = "";

$sql = "SELECT last_name, first_name, description FROM vehicles, customers WHERE vehicles.customer_id = customers.customer_id";

$results = mysqli_query($connection, $sql);

if (!$results){
	$output = "No results returned";
	include 'error.html.php';
	exit();
} 

else{
	while ($vehicle = mysqli_fetch_array($results)){
		$output .=  "<tr>
						<td>{$vehicle['first_name']}</td>
						<td>{$vehicle['last_name']}</td>
						<td>{$vehicle['description']}</td>
					</tr>";				
	}
	
	include 'byCustomer.html.php';
}