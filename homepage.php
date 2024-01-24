<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item");
$sql->execute();
?>
<head>
  <title>Capital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
.background
{
background-image: url(images/4.jpg);
}


.new-arrival div img
{
   width:90 %;
   height:250px;
   border: 1px solid black;
   
}
  </style>
</head>
<div class="new-arrival">
   <h1 style="  text-align:center;margin:30px;font-family:Rosewood Std Regular;font-size:30px;color: Cyan;">New arrival Products from Different brands</h1>

   <div>
<body class="background">

<div class="row">
<?php 
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

?>
<div class="col-sm-3" align="center" >
	<form action="managecart.php" method="POST">
		<img src="images/<?php echo $photo; ?>" width="90%" height= auto; ><br>
		<p style="color:red;">Product name : <?php echo $name; ?></p>
		<p style="color:red;">Price : <?php echo $price;?></p>
		<input type="hidden" name="name" value="<?php echo $name; ?>">
		<input type="hidden" name="price" value="<?php echo $price; ?>">
		<input type="submit" value="Add to Cart" name="buy" class="btn btn-info">
		
	</form>
</div>
<?php } ?>
</div>
<br>
<br>
<div>
   <h3>Quick Link</h3>
              <p><a href="Homepage.php">Home</a></p>
              <p><a href="aboutus.php">About Us</a></p>
              <p><a href="contantus.php">Contact Us</a></p>
            </div>
<div class="footer">
    <footer style="background:black;color:white;padding:1px;"   >
        &copy;Copyright. All right reserved. Developed by Myint Myat Min Hein.
         Thanks For Visiting!!!
      </footer>
 
  </div>
 


</body>











