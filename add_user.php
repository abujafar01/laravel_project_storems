<?php
	require ('connection.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add User</title>
	</head>
	<body>
		<?php
			if(isset($_GET['spend_product_name'])){
				$spend_product_name       = $_GET['spend_product_name'];
				$spend_product_quentity   = $_GET['spend_product_quentity'];
				$spend_product_entry_date = $_GET['spend_product_entry_date'];
				
				$sql = "INSERT INTO spend_product (spend_product_name, spend_product_quentity, spend_product_entry_date ) 
						VALUES('$spend_product_name', '$spend_product_quentity', '$spend_product_entry_date')";
			
				if($conn->query($sql) ==TRUE){
					echo 'Data Inserted!';
				}else{
					echo 'Data not Inserted!';
				}
			}
			
			
		?>
		
		<?php
			
		
		?>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			User's First Name :<br>
			<input type="text" name="user_first_name"><br><br>
			Spend Entry Date :<br>
			<input type="date" name="spend_product_entry_date"><br><br>
			<input type="submit" value="submit">
		</form>	
	</body>
</html>