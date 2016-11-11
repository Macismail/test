<!DOCTYPE html>
<html>
	<head>
		<title> PHP </title>
	</head>
	<body>
		<h1> My first PHP!</h1>
		
		<?php
			$_post['fname'];
			$_post['lname'];			
			$_post['bTitle'];
	
		?>
		
		<div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				First Name:	<input type="text" name="fName" value="First_Name"></br></br>
				Last Name: <input type="text" name="lName" value="Last_Name"></br></br>
				Favorite Book Title:
				<input name="bTitle" type="text" value="Favorite_Book"></br></br><br>
				
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset">
			
			</form>
		</div>
			
	</body>
</html>