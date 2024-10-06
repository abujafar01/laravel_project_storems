<?php
	require ('connection.php');
		session_start();
	
	$user_first_name = $_SESSION['user_first_name'];
	$user_last_name  = $_SESSION['user_last_name'];
	
	if(!empty($user_first_name) && !empty($user_last_name) ) {
			
?>

<!DOCTYPE html>
<html>
	<head>
		<title>List of Category</title>
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
			
								$sql = "SELECT * FROM category";
								
								$query = $conn->query($sql);
								echo "<table class="table table-success table-striped table table-hover"><tr><th>Catagory</th><th>Date</th><th>Action</th></tr>";
								while($data = mysqli_fetch_assoc($query)){
									$category_id = $data['category_id'];
									$category_name = $data['category_name'];
									$category_entrydate  = $data['category_entrydate'];
									
									echo "<tr>
											<td>$category_name</td>
											<td>$category_entrydate</td>
											<td>
												<a href='edit_category.php?id= $category_id' class='bt bt-success'>
													Edit
												</a>
												<a href='#' class='bt bt-danger'>
													Delete
												</a>
											</td>
										</tr>";
								}
								echo "</table>";
								 
								
							?>
					</div><!--end of right -->
				</div><!--top bar -->
			</div>
			<div class="container-foulid border-top border-success">
				<?php include('bottombar.php')?>
			</div>
		</div><!--@end of row-->	
	</body>
</html>
<?php 
	}else{
		header('location:login.php');	
	}
	
?>
	