<?php 
	session_start();

	$user_first_name = $_SESSION['user_first_name'];
	$user_last_name  = $_SESSION['user_last_name'];
	
	if(!empty($user_first_name) && !empty($user_last_name) ) {
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Store Management System | SMS</title>
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
					<div class="col-sm-9"><!--right bar -->
						<div class="row p-4">
							<div class="col-sm-3">
								 <a href="add_category.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Add Category</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_category.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Category List</p>
							</div>
							<div class="col-sm-3">
								<a href="add_product.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Add Product</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_entry_product.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Spand Product</p>
							</div>
						</div>
						</hr>
						<div class="row p-4">
							<div class="col-sm-3">
								 <a href="add_category.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Add Category</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_category.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Category List</p>
							</div>
							<div class="col-sm-3">
								<a href="add_product.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Add Product</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_entry_product.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Spand Product</p>
							</div>
						</div>
						</hr>
						<div class="row p-4">
							<div class="col-sm-3">
								 <a href="report.php"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Report</p>
							</div>
							<div class="col-sm-3">
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						<div class="row p-4">
							<div class="col-sm-3">
								 <a href="add_user"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p>Add User</p>
							</div>
							<div class="col-sm-3">
								<a href="add_user"><i class="fa-solid fa-folder fa-7x text-success"></i></a>
								<p> User List</p>
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3">
							</div>
						</div>
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
	