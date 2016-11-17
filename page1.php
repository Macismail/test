<!DOCTYPE html>
<html>
	<head>
		<title> PHP </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div>
			
		
		<h1> My first PHP!</h1>
		
		<?php
		
			echo $_POST ['fName'];
			echo ' </br>';
			echo $_POST ['lName'];
			echo ' </br>';
			echo $_POST ['bTitle'];
			echo ' </br>';
	
		?> 
		
		<form method="post" action="page1.php">
			
			First Name:	<input type="text" name="fName" ></br></br>
			Last Name: <input type="text" name="lName" ></br></br>
			Favorite Book Title:
			<input name="bTitle" type="text"></br></br><br>
				
			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset">
			
		</form>
		</div>
			
	</body>
</html>