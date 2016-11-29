<!DOCTYPE html>
<html>
	<head>
		<title> PHP </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
					integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
					integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

	</head>
	<body>
		<div>
			
		
		<h1> My first PHP!</h1>
		
		<?php
			$xmlDOM = new DOMDocument();
			$xmlDOM -> load('book.xml');
			$x = $xmlDOM -> documemntelement();
			
			foreach ($x ->childNodes as $item){
				
				print $item -> nodeName. " = ".$item ->nodeValue . "</br> ";
			}
				
			$xslDOM = new DOMDocument();
			$xslDOM -> substitutesEntities=true;
			$xslDOM -> load('book.xsl');
			
			// Configure the transformer
			$proc = new XSLTProcessor;
			$proc->importStyleSheet($xsl);
			
			echo $proc->transformToXML($xml);
			
			if(isset($_SERVER['HTTP_REFERER'])){
   		header("Location: " . $_SERVER['HTTP_REFERER']);
			} else {
   		echo "An Error";
			}
			
			//get details from form
			$author = $_Post['author'];
			$title = $_Post['title'];
			$genre = $_Post['genre'];
			$price = $_Post['price'];
			
			echo "book.xsl";
	
		?> 
		
		
			
	</body>
</html>