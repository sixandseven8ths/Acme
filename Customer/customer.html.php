<?php 
	$page_title = "Customers";
	include '../includes/header.html.php'; 
?>
	<h3>Manage Customers</h3>
    
    <p><a href="?add" id="button">Add new customer</a></p>
		
			<table>
				<?php foreach ($customers as $cust): ?>
				
					<tr>
						<td><?php echo $cust['first'] . " " . $cust['last'];?><input type="submit" value="Edit"><input type="submit" value="Delete"></td>
						
					</tr>
					
				<?php endforeach; ?>
			</table>
			
<?php include '../includes/footer.html.php'; ?>