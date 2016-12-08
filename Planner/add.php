<?php
if(isset($_POST['submitSave'])){
	$user=simplexml_load_file('user.xml');
	$person=$user->addChild('person');
	$person->addAttribute('id', $_POST['id']);
	$person->addChild('name', $_POST['name']);
	$person->addChild('phone', $_POST['phone']);
	file_put_contents('user.xml',$user->asXML());
	header('location:index.php');
}
?>	
<form method="post">
	<table cellpading="2" cellspacing="2">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone"></td>
		</tr>
				<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submitSave" value="Save"></td>
		</tr>
</form>