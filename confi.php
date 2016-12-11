<?php
session_start();
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
	  <div classe="container">
	  	<div class="panel panel-default">
	  		<div class="panel-heading text-center">
	  			<h2> Payment Confirmation </h2>
				
				Customer's name: <?php echo $_POST['username']; ?><br>
				Car size: <?php echo $_SESSION['size']; ?><br>
				Pickup Location: <?php echo $_SESSION['place']; ?><br>
				Pick up Date: <?php echo $_SESSION['p_date']; ?><br>
				Pickup Time: <?php echo $_SESSION['time']; ?><br>
				<?php $id= uniqid();?>
				Reference number: <?php echo uniqid(); ?><br>
				
				
				
	  			<h3> Your booking has been confirmed </br> Thank You</h3> </br> 
				<p><h4>Register today and claim your Membership bonus</h4></p>
	  			<a href="register.php" class="btn btn-success" role="button">Register </a>
				<a href="index.php" class="btn btn-success" role="button"> Back to Home Page </a>
				
	  		</div>
	  	</div>
	  </div>
	  <?php 
	  	if(isset($_POST['submit'])){
	    // process
	    $username = $_POST['username'];
	    $email = $_POST['email'];
	    $cardN = $_POST['cardN'];
	    $expiry_month = $_POST['expiry_month'];
	    $expiry_year = $_POST['expiry_year'];
	    $cvv = $_POST['cvv'];
		$size= $_SESSION['size'];
		$place= $_SESSION['place'];
		$p_date = $_SESSION['p_date'];
		$time = $_SESSION['time'];

	    $xml = simplexml_load_file("rent.xml") or die("error opening xml");
	    
	    $rent = $xml -> addChild('rental');	    
	    $rent -> addchild('username' , $username);
	    $rent -> addchild('email' , $email);
	    $rent -> addchild('cardN' , $cardN);
	    $rent -> addchild('expiry_month' , $expiry_month);
	   	$rent -> addchild('expiry_year' , $expiry_year);
	   	$rent -> addchild('cvv' , $cvv);


	    $xml -> asXML ("rent.xml"); 
		
		$xml = new SimpleXMLElement('<user></user>');
		
		$xml->addChild('id',$id);
		$xml->addChild('username',$username);
		$xml->addChild('email', $email);
		$xml->addChild('size', $size);
		$xml -> addchild('place' , $place);
		$xml -> addchild('p_date' , $p_date);
		$xml -> addchild('time' , $time);
		
		$xml->asXML('users/' .$username . '.xml');
		
		$xml -> asXML ("users.xml");
		
	  }

	  ?>
	</body>
</html>