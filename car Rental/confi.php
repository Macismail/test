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
			<p>Irish Car Rentals offers cheap rental cars in Dublin Airport branch with rental desks in both Terminal 1 and Terminal 2</p>
		</div>
	  </div>
	  <div classe="container">
	  	<div class="panel panel-default">
	  		<div class="panel-heading text-center">
	  			<h2> Payment Confirmation </h2>
	  			<h3> your booking has been confirmed </br> Thanks </h3></br>
	  			<a href="index.php" class="btn btn-success" role="button"> Bock to Home Page </a>
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

	    $xml = simplexml_load_file("rent.xml") or die("error opning xml");
	    
	    $rent = $xml -> addChild('rental');	    
	    $rent -> addchild('username' , $username);
	    $rent -> addchild('email' , $email);
	    $rent -> addchild('cardN' , $cardN);
	    $rent -> addchild('expiry_month' , $expiry_month);
	   	$rent -> addchild('expiry_year' , $expiry_year);
	   	$rent -> addchild('cvv' , $cvv);

	    $xml -> asXML ("rent.xml");

	  }

	  ?>
	</body>
</html>