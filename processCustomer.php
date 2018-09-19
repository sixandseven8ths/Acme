<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="default.css">
<title>New Customer</title>
</head>

<body>
	<h1>New Customer</h1>
	<p>The following customer has been added to the Acme Repair database</p>
	<table>
		<tr>
			<td>First name:</td>
			<td><?php echo htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<tr>
			<td>Last name:</td>
			<td><?php echo htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<tr>
			<td>Company:</td>
			<td><?php echo htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<tr>
			<td>City:</td>
			<td><?php echo htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<tr>
			<td>State:</td>
			<td><?php echo htmlspecialchars($_POST['state'], ENT_QUOTES, 'UTF-8'); ?></td>
		<tr>
			<td>Postal Code:</td>
			<td><?php echo htmlspecialchars($_POST['zip'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?></td>
		</td>
	</table>
	
</html>