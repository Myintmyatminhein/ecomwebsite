<?php
include 'header.php';
?>
<html>
	<body>
	
	<div class="row">
		<div class="col-lg-12 text-center border rounded bg-light my-5">
			<h1>My Cart</h1>
		</div>
		
		<div class="col-lg-9">
			<table class="table">
				<thead> 
					<tr>
						<th>Serial no.</th>
						<th>Item Name</th>
						<th>Item Price</th>
						<th>Qantity</th>
<!-- 						<th>Total</th> -->
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					   $total = 0;
					   if (isset($_SESSION['cart'])) {
					       
					       foreach ($_SESSION['cart'] as $key=>$value) {
					           $total=$total+$value['price'];
					           $key=$key+1;
					           ?>
					           <tr>
					           <td><?php echo $key; ?></td>
					           <td><?php echo $value['name']; ?></td>
					           <td><?php echo $value['price']; ?></td>
					           <td><input type="number" min="1" max="10" value="1" name="quan"></td>
<!-- 					           <td>0</td> -->
					           <form method="POST" action="managecart.php">
					           		<td> <input type="submit" name="remove" value="REMOVE" class="btn btn-danger"></td>
					           				<input type="hidden" value="<?php echo $value['name']; ?>" name="name"> 
					           </form>
					           <?php 
					       }
					   }
					?>
				</tbody>
			</table>
		</div>
		
		<div class="col-lg-3">
			<div class="border bg-light rounded text-center p-4">
				<h3>Total</h3>
				<h3><?php echo $total; ?></h3>
				<form><a href="checkout.php" class="btn btn-outline-success btn-block">checkout</a></form>
			</div>
		</div>
		
		
	</div>
	
	</body>
</html>