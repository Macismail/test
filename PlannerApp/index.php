<?php
#require 'simplexml.class.php';
#include'xml_parser.php';
#$str=file_get_contents('products.xml');
#$products=simplexml_load_file($str);
if(isset($_GET['action'])){
	$products=simplexml_load_file('products.xml');
	$id=$_GET['id'];
	$index=0;
	$i=0;
	foreach($products->product as $product){
		if($product['id']==$id){
			$index=$i;
			break;
		}
		$i++;
	}
	unset($products->product[$index]);
	file_put_contents('products.xml',$products->asXML());
}
$products=simplexml_load_file('products.xml');
echo'Number of Participants:'.count($products);
echo'<br>People to Invite:';
?>
<br>
<a href="add.php">Add new Participant</a>
<br>
<table cellpading="2" cellspacing="2" border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone/Email</th>
		<th>Option</th>
	</tr>
	<?php foreach ($products->product as $product){ ?>
	<tr>
		<td><?php echo $product['id']; ?></td>
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->contact; ?></td>
		<td align="center">
		<a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a>|
		<a href="index.php?action=delete&id=<?php echo $product['id'];?>" 
		onclick="return confirm('Are you sure?')">Delete<a/></td>
	</tr>
	<?php }?>
</table>
