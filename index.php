<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Car Rental</title>
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
	 <div class="container">
		<div class="jumbotron text-center">
			<h1>Car Rentals</h1>
			<p>Irish Car Rentals offers cheap rental cars in Dublin Airport and city cente</p>
		
			<div class="panel-heading text-center">
				<div class="controls">
					<a href="login.php" class="btn btn-success" role="button"> Login </a>
					<a href="register.php" class="btn btn-success" role="button">Register New Member</a>
					<p>	Register today and claim your membership bonus </p>
				</div>
			</div>
			
		</div>
	 </div>	
      <div class="container">
      	<div class="row">
      		<div class="col col-md-8">
      			
      				<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img class="first-slide" src="image/Large1.fw.png" alt="First slide">
							</div>
							<div class="item">
								<img class="second-slide" src="image/medium1.fw.png" alt="Second slide">
							</div>
							<div class="item">
								<img class="third-slide" src="image/small1.fw.png" alt="Third slide">
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
      			
      		</div>
      		<div class="col col-md-4">
      			<div class="panel panel-success">
				  <div class="panel-heading text-center"><h2> Car Rental Details </h2></div>				
						  
				  <div class="panel-body">

	      			  <form class="form-horizontal" method="post" action="carent.php" placeholder="select">	      				 
	      				<div class="form-group">
							<label for="inputdefault">Select Car Size:</label>
							<select class="form-control" id="size" name="size" placeholder="select">
			
								<option>Small</option>
								<option>Medium</option>
								<option>Large</option>								    
							</select>														
						</div>

	      				<div class="form-group">
							<label for="sel2">Select Pickup Place:</label>
							<select class="form-control" id="place" name="place">
								
								<option>Dublin Airport</option>
								<option>City Center</option>			    				    
							</select>								
						</div>				
	      		
	      				<div class="form-group">
	      					<label for="sel2">Pickup Date:</label>
	      					<input Class"form-control" name ="p_date" id="p_date" type="date">	
	      				</div>
	      				<div class="form-group">
	      					<label for="sel1">Rental Days:</label>
	      					<select class="form-control" id="days" name="days">
								<option>1</option>	<option>2</option>	<option>3</option>	
								<option>4</option>  <option>5</option>	<option>6</option>	
								<option>7</option>	<option>8</option>	<option>9</option>	
								<option>10</option> <option>11</option>	<option>12</option>	
								<option>13</option>	<option>14</option>	<option>15</option>	 
							</select>	      					
	      				</div>
	      				<div class="form-group">
	      					<label for="sel1">Pickup Time:</label>
	      					<input Class"form-control" name="time" id="time" type="time">
	      				</div>

	            		<button name="submit" type="submit" class="btn btn-success" >get Price</button>

	      			  </form>  				

				  </div>
				</div>      			
      		</div>      		
      	</div>
      </div>
      <script>
      	$(documment)ready(function(){
      		$(#p_date).datepicker;
      		$(#time).timepicker;
      		
      	});
      	
      </script>
	  <?php
	  session_destroy();
	  ?>
     </body>
     </html>
