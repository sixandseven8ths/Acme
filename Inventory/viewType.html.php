<?php 
	$page_title = "Inventory";
	include '../includes/header.html.php'; 
?>
<h1>Manage Inventory<h1>
		<form action="" method="post" id="inventory">
			<label>Select Inventory Type</label>
			<select name="type_id">
				<?php foreach ($types as $type): ?>
					<option value="
						<?php echo $type['id']; 
							if ($type_id == $type['id']){
							echo '" selected="selected';
							}?>
						">
						<?php echo $type['description']; ?>
					</option>
				<?php endforeach; ?>
			</select>
			<input type="submit" value="View Inventory">
		</form>
		
		<table>
			<?php foreach ($descriptions as $description): ?>
			<form action="" method ="post">
				<tr>
					<td><?php echo $description['description']; ?></td>
					<td><input type="hidden" name="id" value "<?php echo $description['id']; ?>"></td>
					<td><input type="submit" name="action" value ="Edit"></td>
					<td><input type="submit" name="action" value ="Delete"></td>
				</tr></form>
			<?php endforeach; ?>
		</table>
<?php 

include '../includes/footer.html.php'; ?>