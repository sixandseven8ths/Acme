<?php
	$user = $_POST['username'];
	$password = $_POST['password'];
	
	//if ($username == "George" && $password == "letmein"){

	//$output = '<p> You have successfully logged in ' . $username . '.</p>';
	
	//setcookie('username', $username, time() + 86400);

	//} else {

	//$output = '<p>The username / password combination are incorrect</p>';

	//}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset=utf-8>
<title>Login</title>
</head>

<body>
<?php
	require_once 'connection.php';
		
	$query = "SELECT user
				FROM users
				WHERE user = '$user'
				AND password = SHA1('$password')";

	$results = mysqli_query($connection, $query);

if ($results) {
	echo "Success";
}else{

	echo "Failure";
}

?>

</body>

</html>
