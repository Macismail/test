<?php
if(isset($_GET['action'])){
	$person=simplexml_load_file('user.xml');
	$id=$_GET['id'];
	$index=0;
	$i=0;
	foreach($user->person as $person){
		if($person['id']==$id){
			$index=$i;
			break;
		}
		$i++;
	}
	unset($user->person[$index]);
	file_put_contents('user.xml',$person->asXML());
}
$person=simplexml_load_file('user.xml');
echo'Number of People Invited:'.count($person);
echo'<br>People to Invite';
?>
<br>
<a href="add.php">Add new Person</a>
<br>
<table cellpading="2" cellspacing="2" border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Option</th>
	</tr>
	<?php foreach ($user->person as $person){ ?>
	<tr>
		<td><?php echo $person['id']; ?></td>
		<td><?php echo $person->name; ?></td>
		<td><?php echo $person->phone; ?></td>
		<td><?php echo $person->email; ?></td>
		<td align="center">
		<a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a>|
		<a href="index.php?action=delete&id=<?php echo $person['id'];?>" 
		onclick="return confirm('Are you sure?')">Delete<a/></td>
	</tr>
	<?php }?>
</table>
