<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM pants");
$sql->execute();
?>
<head>
  <title>Capital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="mystyle.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <style type="text/css">


 
.new-arrival div img
{
   width:90 %;
   height:250px;
   border: 1px solid black;
   
}

     ul{

       list-style-type: none;
       margin: 0;
       padding: 0;
       overflow: hidden;
       background-color: #333;

    }
    li{
      float:left;
   }
   li a{

      display: block;
      color: white;
      text-decoration: none;
      padding:14px 16px;
      text-align: center;
   }

   li.dropdown{
      display: inline-block;
   }

   .dropdown-content{
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);s
      z-index: 1;
   }
   .dropdown-content a{
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
   }

   .dropdown-content a:hover{background-color: #f1f1f1;}

   .dropdown:hover .dropdown-content{
      display: block;
   }
    .footer
    {
      clear: both;
      text-align: center;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: gray;
      color: white;
    }
    .background
    {
    background-image: url(images/4.jpg)
    }
    </style>
    </head>
    <div class="new-arrival">
   <h1 style="  text-align:center;margin:30px;font-family:Rosewood Std Regular;font-size:30px;color: Cyan;">Pants from Different brands</h1>

   <div>
<body class="background">

<div class="row">

<?php 
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

?>
<div class="col-sm-3" align="center" >
	<form action="managecart.php" method="POST">
		<img src="pantsimages/<?php echo $photo; ?>" width="90%" height= auto; ><br>
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
              <p><a href="index.html">Home</a></p>
              <p><a href="aboutus.html">About Us</a></p>
              <p><a href="contact.html">Contact Us</a></p>
            </div>
<div class="footer">
    <footer style="background:black;color:white;padding:1px;"   >
        &copy;Copyright. All right reserved. Developed by Myint Myat Min Hein.
         Thanks For Visiting!!!
      </footer>
 
  </div>
