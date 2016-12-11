<?php
$errors= array ();
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '',$_POST['username']);
	$email =$_POST['email'];
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];

	if(file_exists('users/'.$username.'.xml')){
		$errors[] = 'Username already exists';
	}
	if($username == ''){
		$errors[] = 'You have to fill up username field';
	}
	if($email == ''){
		$errors[] = 'You have to fill up email field';
	}
	if($password == '' || $c_password == ''){
		$errors[] = 'You have to fill up password field';
	}
	if($password != $c_password){
		$errors[] = 'Your passwords do not match';
		$xml->addChild('password'.md5($password));
		$xml->addChild('email'.$email);
		$xml->asXML('users/' . $username . '.xml');
		header('Location: login.php');
		die;
	}
	if(count($errors) == 0){
		$xml = new SimpleXMLElement('<user></user>');
		$xml->addChild('password',md5($password));
		$xml->addChild('email', $email);
		$xml->asXML('users/' .$username . '.xml');
		header('Location: login.php');
		die;
	}
}

?>
<!DOCTYPE html>
<html>
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
					 <div class="panel-heading"><h2> Register </h2>
						<div class="row-fluid">
						<div class="controls">
						<div class="control-group">
						<fieldset>
						
	  
	  

	<form method="post" action="">
		<?php
		if(count($errors) >0){
			echo'<ul>';
			foreach($errors as $e){
				echo'<li>'.$e.'</li>';
			}
			echo'</ul>';
		}
		?>
		<b>Username </b><br>
		<p><input type="text" name="username" size="20"/></p>
		<b>Email </b><br>
		<p><input type="text" name="email" size="20"/></p>
		<b>Password </b><br>
		<p><input type="password" name="password" size="20"/></p>
		<b>Confirm Password</b><br>
		<input type="password" name="c_password" size="20"/><br>
		<br>
		<p><input type="submit" value="Register" name="login" class="btn btn-success" />
		<a href="login.php" class="btn btn-success" role="button"> Login </a>
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