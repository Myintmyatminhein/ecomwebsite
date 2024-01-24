<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item");
$sql->execute();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <div>
    <h1 style="text-align:center;">About Us</h1>
      <p style="text-align:justify;font-size: 25px;" >        In Yangon, Best of Earth Company is the huge fashion reseller company that sell related with fashion for example street wear clothes, sneakers, t-shirt and others accessories. In best of earth Company, customers can get these various fashion accessories from different brands because best of earth Company buy the fashion accessories from different brands and resell these accessories in Yangon. Customer can buy the prodcuts from our best of earth company. </p>

     <h2 style="text-transform: uppercase;text-align:center;margin:20px 0px;"></h2>
 
      <img src="images/1.jpg" width="100%"height=auto;>
      


              <h3>Quick Link</h3>
              <p><a href="Homepage.php">Home</a></p>
              <p><a href="aboutus.php">About Us</a></p>
              <p><a href="contantus.php">Contact Us</a></p>
               
      </div>
  </div><br><br><br><br>
  <div class="footer">
    <footer style="background:black;color:white;padding:1px;"   >
        &copy;Copyright. All right reserved. Developed by Myint Myat Min Hein.
         Thanks For Visiting!!!
      </footer>

</body>
</html>