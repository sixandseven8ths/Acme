<?php
session_start();

if (!isset($_SESSION['username'])){

header("Location: login.html");

exit();

}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset=utf-8>
<title>Welcome</title>
</head>

<body>

	<?php
		echo "Welcome, " . $_SESSION['username'];
	?>

	<p>
		<a href="../Sessions/logout.php">Log Out</a>
	</p>

</body>

</html>
