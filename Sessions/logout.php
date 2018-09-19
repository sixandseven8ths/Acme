<?php
	session_start();
	//setcookie('username', $_COOKIE['username'], time() - 3600);
	session_destroy();
	header('Location: login.html');
?>


<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Logged Out</title>
</head>

<body>
	
	<h1>You have been logged out!</h1>

</body>

</html>
