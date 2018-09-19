<?php

	session_start();
	if (isset($_SESSION['username'])){
		include 'access.php';
	}
	$user = $_POST['username'];
	$password = $_POST['password'];
	
	require_once 'connection.php';
		
	$query = "SELECT user
				FROM users
				WHERE user = '$user'
				AND password = SHA1('$password')";

	$results = mysqli_query($connection, $query);

if ($results) {
	 $_SESSION['username'] = $user;
	 $_SESSION['access'] = "admin";  // Allows you to set different access privileges
	 header("Location: access.php");
}else{

	include 'index.php';
}

?>
