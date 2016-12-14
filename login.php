<?php
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '',$_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/'.$username.'.xml')){
		$xml=new SimpleXMLElement('users/'.$username.'.xml',0,true);
		if($password==$xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location: member.php');
			die;
		}
	}
	$error = true;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.3org/1999/xhtml">
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
<title>Login</title>
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
				<div class="col col-md-3"></div>
				<div class="col col-md-6">
					<div class="panel panel-success text-center">
					 <div class="panel-heading">
						<div class="row-fluid">
						<div class="controls">
						<div class="control-group">
						<fieldset>
						
	  
	  

	<form method="post" action="">

	<h1>Login</h1>
	<form method="post" action="">
		<b>Username</b><br>
		<p><input type="text" name="username" size="20"/></p>
		<b>Password</b><br> 
		<p><input type="password" name="password" size="20"/></p>
		<?php
		if($error){
			echo '<p>Invalid username/and/or password </p>';
		}
		?>
		<p><input type="submit" value="Login" name="login" class="btn btn-success" />
		<a href="register.php" class="btn btn-success">Register</a>
		<a href="index.php" class="btn btn-success">Back to Home Page</a></p>
	</form>
	
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