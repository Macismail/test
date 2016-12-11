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

	   <div class="container">
	   	<div class="row">
	   		<div class="col col-md-6">
	   			<div class="panel panel-success">
	   			  <div class="panel-heading"><h2> Enter Payment Please </h2>	   				
					<div class="row-fluid">
				      <form class="form-horizontal" method="post" action="confi.php">
				        <fieldset>				          
				          <!-- Name -->
				          <div class="control-group">
				            <label class="control-label"  for="username">Card Holder's Full Name</label>
				            <div class="controls">
				              <input type="text" id="username" name="username" placeholder="" class="input-default">
				            </div>
				          </div>

				          <div class="control-group">
				            <label class="control-label" for="email">Email Address</label>
				            <div class="controls">
				              <input type="email" id="email" name="email" placeholder="" class="input-default">
				            </div>
				          </div>
				     
				          <!-- Card Number -->
				          <div class="control-group">
				            <label class="control-label" for="email">Card Number</label>
				            <div class="controls">
				              <input type="text" id="cardN" name="cardN" placeholder="" class="input-default">
				            </div>
				          </div>
				          				     
				          <!-- Expiry-->
				          <div class="control-group">
				            <label class="control-label" for="password">Card Expiry Date</label>
				            <div class="controls">
				              <select class="span3" name="expiry_month" id="expiry_month">
				                <option></option>
				                <option value="01">Jan (01)</option>
				                <option value="02">Feb (02)</option>
				                <option value="03">Mar (03)</option>
				                <option value="04">Apr (04)</option>
				                <option value="05">May (05)</option>
				                <option value="06">June (06)</option>
				                <option value="07">July (07)</option>
				                <option value="08">Aug (08)</option>
				                <option value="09">Sep (09)</option>
				                <option value="10">Oct (10)</option>1
				                <option value="11">Nov (11)</option>
				                <option value="12">Dec (12)</option>
				              </select>
				              <select class="span2" name="expiry_year" id="expiry_year">
				                <option value="13">2016</option>
				                <option value="14">2017</option>
				                <option value="15">2018</option>
				                <option value="16">2019</option>
				                <option value="17">2020</option>
				                <option value="18">2021</option>
				                <option value="19">2022</option>
				                <option value="20">2023</option>
				                <option value="21">2024</option>
				                <option value="22">2025</option>
				                <option value="23">2026</option>
				              </select>
				            </div>
				          </div>
				     
				          <!-- CVV -->
				          <div class="control-group">
				            <label class="control-label"  for="password_confirm">Card CVV</label>
				            <div class="controls">
				              <input type="numeric" id="cvv" name="cvv" placeholder="" class="span2">
				            </div>
				          </div></br>
				     
				          <!-- Submit -->
				          <div class="control-group">
				            <div class="controls">
				              <button name="submit" type="submit" class="btn btn-success">Pay Now</button>
				            </div>
				          </div>				     
				        </fieldset>
				      </form>
				    </div>				
	   			</div>
	   			</div>
	   		</div>
	   		<div class="col col-md-6">
	   			<div class="panel panel-success">
	   				<div class="panel-heading text-center"><h2> Your Rental car Details </h2>
	   				<table class="table">
	   					<thead>
	   						<tr class="success">
	   						<td> <label for="inputdefault">Car Size:</label> </td>
	   						<td id="carsize">
	   						  <?php if(isset($_POST['submit'])){ $size = $_POST['size']; } echo $size;?>
	   						 </td>
	   						</tr>
	   						<tr class="success">
	   						 <td> <label for="inputdefault">Pickup Place:</label> </td>
	   						 <td>
	   						  <?php if(isset($_POST['submit'])){ $place = $_POST['place']; } echo $place; ?>
	   						 </td>
	   						</tr>
	   						<tr class="success">
	   						  <td> <label for="inputdefault">Pickup Date:</label> </td>
	   						 <td>
	   						  <?php if(isset($_POST['submit'])){ $p_date = $_POST['p_date']; } echo $p_date; ?>
	   						 </td>
	   						</tr>
	   						<tr class="success">
	   							<td> <label for="inputdefault">Pickup Time:</label> </td>
	   						 <td>
	   						  <?php if(isset($_POST['submit'])){ $time = $_POST['time']; } echo $time; ?>
	   						 </td>
	   						</tr>
	   						<tr class="success">
	   							<td> <label for="inputdefault">Rental Days:</label> </td>
	   						 <td id="rentdays">
	   						  <?php if(isset($_POST['submit'])){ $days = $_POST['days']; } echo $days; ?>
	   						 </td>
	   						</tr>
	   						<tr class="success">
	   							<td> <label for="inputdefault">Total Price:</label> </td>
	   							<td id="tprice"> 
	   							<?php 
								
								$_SESSION['size'] = $size;
								$_SESSION['place'] = $place;
								$_SESSION['p_date'] = $p_date;
								$_SESSION['time'] = $time;
	   								if(isset($_POST['submit'])){
	   									$size = $_POST['size'];
	   									$days = $_POST['days'];
	   									 switch ($size){
									    	case "Small";
									    		$price = 23 *  $days;
									    	break;
									    	case "Medium";
									    		$price = 32 *  $days;
									    	break;
									    	case "Large";
									    		$price = 45 *  $days;
									    	break;
									    	default:
									    		$price = 0;
									    	break;
									    	}
									    echo $price . "€";
	   								}
	   							 ?>
	   							</td>
	   						</tr>
	   					</thead>
	   				</table>
	   				</div>
	   			</div>
	   		</div>
	   	</div>
	   </div>	

	<?php
	  
	  if(isset($_POST['submit'])){
	    // process
	    $size = $_POST['size'];
	    $place = $_POST['place'];
	    $p_date = $_POST['p_date'];
	    $days = $_POST['days'];
	    $time = $_POST['time'];

	    switch ($size){
	    	case "Small";
	    		$price = 23 *  $days;
	    	break;
	    	case "Medium";
	    		$price = 32 *  $days;
	    	break;
	    	case "Large";
	    		$price = 45 *  $days;
	    	break;
	    	default:
	    		$price = 0;
	    	break;
	    }
	    
	    $xml = simplexml_load_file("rent.xml") or die("error opning xml");
	    
	    $rent = $xml -> addChild('rental');	    
	    $rent -> addchild('size' , $size);
	    $rent -> addchild('place' , $place);
	    $rent -> addchild('p_date' , $p_date);
	    $rent -> addchild('days' , $days);
	   	$rent -> addchild('time' , $time);
	   	$rent -> addchild('price' , $price);

	    
	  }
	?>	
	</body>
</html>