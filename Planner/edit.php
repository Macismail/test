<?php
$user=simplexml_load_file('user.xml');
if(isset($_POST['submitSave'])){
	foreach ($user->person as $person){
		if($person['id']==$_POST['id']){
			$person->name =$_POST['name'];
			$person->phone =$_POST['phone'];
			$person->email =$_POST['email'];
			break;
		}
	}
	file_put_contents('user.xml',$user->asXML());
	header('location:index.php');
}

foreach ($user->person as $person){
	if($person['id']==$_GET['id']){
		$id=$person['id'];
		$name=$person->name;
		$phone=$person->phone;
		$email=$person->email;
		break;
	}	
}

?>	
<form method="post">
	<table cellpading="2" cellspacing="2">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="<?php echo $person_id; ?>"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
		</tr>
				<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submitSave" value="Save"></td>
		</tr>
</form>