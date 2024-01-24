<?php
include 'adminheader.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM promoitem");
$sql-> execute();
?>
<style>
	
		#Product 
		{
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 50%;
			margin-left: auto;
			margin-top: 50px;

			margin-right: auto;
	}
		#Product  td, #Product  th {
		  border: 1px solid #ddd;
		  padding: 8px;
	}
	#Product  tr:nth-child(even){background-color: #f2f2f2;}
	#Product  tr:nth-child(odd){background-color: pink;}
	#Product  tr:hover {background-color: #ddd;}
	#Product  th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #04AA6D;
	  color: white;
	}
	

	</style>
<table id="Product">
	<th>Name</th>
	<th>Category</th>
	<th>Price</th>
	<th>Description</th>
	<th>Photo</th>
	<th>Update</th>
	<th>Delete</th>
	
	<?php 
	while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	    extract($row);
	
	?>
	<tr>
		<td><?php echo $name; ?></td>
		<td><?php echo $category; ?></td>
		<td><?php echo $price; ?> MMk</td>
		<td><?php echo $description; ?></td>
		<td><img src="promoimages/<?php echo $photo; ?>" width="50" height="50"></td>
		<td><a href="updatepromo.php?eid=<?php echo $IID;?>">Update</a></td>
		<td><a href="deletepromo.php?did=<?php echo $IID; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br>
<br>
<br>
