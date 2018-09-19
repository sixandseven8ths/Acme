<?php 

include '../../Model/connection.php';

$output = "";

$sql = "SELECT last_name, first_name, company, email FROM customers";

$results = mysqli_query($connection, $sql);

if (!$results){
	$output = "No results returned";
	include 'error.html.php';
	exit();
} 

else{
	while ($customer = mysqli_fetch_array($results)){
		$output .=  "<tr>
						<td>{$customer['first_name']}</td>
						<td>{$customer['last_name']}</td>
						<td>{$customer['company']}</td>
						<td>{$customer['email']}</td>
					</tr>";				
	}
	
	include 'output.html.php';
}
?>