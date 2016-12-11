<?php
session_start();


$error = false;
if(isset($_POST['change'])){
	$old = md5($_POST['o_password']);
	$new = md5($_POST['n_password']);
	$c_new = md5($_POST['c_n_password']);
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
	if($old ==$xml->password){
		if($new == $c_new){
			$xml->password = $new;
			$xml->asXML('users/' . $_SESSION['username'] . '.xml');
			header('Location: member.php');
			die;
		}	
	}
	$error = true;
}
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
	<title>Change password</title>
</head>

<body>
 <div slass="container">
		<div class="jumbotron text-center">
			<h1>Car Rentals</h1>
			<p>Irish Car Rentals offers cheap rental cars in Dublin Airport and city center</p>
		</div>
	  </div>and city center
	  
	  <div class="container">
			<div class="row">
				<div class="col col-md-6">
					<div class="panel panel-success">
					 <div class="panel-heading">
						<div class="row-fluid">
						<div class="controls">
						<div class="control-group">
						<fieldset>
						
	<h1>Change Password</h1>
	<form method="post" action="">
		<?php
		if($error){
			echo'<p>Some of the passwords do not match</p>';
		}
		?>
		<b>Old password</b><br>
		<p><input type="password" name="o_password" /></p>
		<b>New password</b><br> 
		<p><input type="password" name="n_password" /></p>
		<b>Confirm new password</b><br> 
		<p><input type="password" name="c_n_password" /></p>
		<p><input type="submit" name="change" value="Change Password" class="btn btn-success" />
		<a href="index.php" class="btn btn-success">Back to Home Page</a></p></a></p>
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