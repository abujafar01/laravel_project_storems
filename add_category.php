<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname ='store_db';
	
	$conn =new mysqli($hostname, $username, $password, $dbname);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Category</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div class="container bg-light">
			<div class="container-foulid border-buttom border-success"><!--top bar -->
				<?php include ('topbar.php')?>
			</div><!--@end of top bar -->
			<div class="container-foulid">
				<div class="row">
					<div class="col-sm-3 bg-light p-0 m-0"><!--left bar -->
						<?php include('leftbar.php')?>
					</div><!--@end of left-->
					<div class="col-sm-9 border-start border-success"><!--right bar -->
							<div class="container p-4 m-4">
							</div>
							<?php
								if(isset($_GET['category_name'])){
									$category_name   = $_GET['category_name'];
									$category_entrydate = $_GET['category_entrydate'];
									
									$sql = "INSERT INTO category (category_name , category_entrydate ) VALUES('$category_name', '$category_entrydate')";
								
									if($conn->query($sql) ==TRUE){
										echo 'Data Inserted!';
									}else{
										echo 'Data not Inserted!';
									}
								}
								
								
							?>
		
							<form action="add_category.php" method="GET">
								Category :<br>
								<input type="text" name="category_name"><br><br>
								Category Entry Date :<br>
								<input type="date" name="category_entrydate"><br><br>
								<input type="submit" value="submit class=bt bt-success ">
							</form>	<!--end of container -->
					</div><!--end of right -->
				</div><!--top bar -->
			</div>
			<div class="container-foulid border-top border-success">
				<?php include('bottombar.php')?>
			</div>
		</div><!--@end of row-->
	</body>
</html>