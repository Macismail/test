<?php
session_start();


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> <i class="fa fa-bars"></i> carousel </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
		integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
	<title>User Page</title>
</head>

<body>
 <div slass="container">
		<div class="jumbotron text-center">
			<h1>Car Rentals</h1>
			<p>Irish Car Rentals offers cheap rental cars in Dublin Airport and city center</p>
		</div>
	  </div>
	  
	  <div class="container">
			<div class="row">
				<div class="col col-md-6">
					<div class="panel panel-success">
					 <div class="panel-heading">
						<div class="row-fluid">
						<div class="controls">
						<div class="control-group">
						<fieldset>
						
	  
	<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
	
	Thank you for registering with Irish Car rentals. <br>
	To show you our appreciation we offer you<br>
	10% discount on your next transaction.<br>
	Use the reference number:<br>
	<?php
	$ref_num= uniqid();
	echo $ref_num;
	?>
	<br>
	to apply your membership bonus. </br>
	<br>


	
	<br>
	<a href="changepassword.php" class="btn btn-success">Change Password</a>
	
	<a href="logout.php" class="btn btn-success">Logout</a>
	<a href="index.php" class="btn btn-success">Back to Home Page</a></p>
	
									</div>	
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>
	 </div>
	
</body>
</html>