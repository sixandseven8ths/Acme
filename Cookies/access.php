<?php

if (!isset($_COOKIE['username'])){

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
		echo "Welcome, " . $_COOKIE['username'];
	?>

	<p>
		<a href="logout.php">Log Out</a>
	</p>

</body>

</html>
