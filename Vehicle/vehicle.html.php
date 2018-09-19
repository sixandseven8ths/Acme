<?php 
	$page_title = "Vehicles";
	include '../includes/header.html.php'; 
?>
<h1>Manage Vehicles<h1>
		<!-- Display customer selection -->
		<form action="" method="post" id="customer">
			<label>Choose a customer</label>
			<select name="customer_ID">
				<?php foreach ($customers as $customer): ?>
					<option value="
						<?php echo $customer['id']; 
						if ($customer_id == $customer['id']){
							echo '" selected="selected';
						}?>
					">
						<?php echo $customer['first'] . " " . $customer['last'] . " - " . $customer['company']; ?>
					</option>
				<?php endforeach; ?>
			</select>
			<input type="submit" value="View Vehicles">
		</form>
		
		<!-- Display customer's vehicles -->
		<p><a href="?add" id="button">Add new vehicle</a></p>
		
		<table>
			<?php foreach ($vehicles as $vehicle): ?>
			<form action="" method ="post">
				<tr>
					<td><?php echo $vehicle['vehicle']; ?></td>
					<td><input type="hidden" name="id" value "<?php echo $vehicle['id']; ?>"></td>
					<td><input type="submit" name="action" value ="Edit"></td>
					<td><input type="submit" name="action" value ="Delete"></td>
				</tr></form>
			<?php endforeach; ?>
		</table>
<?php 

include '../includes/footer.html.php'; ?>