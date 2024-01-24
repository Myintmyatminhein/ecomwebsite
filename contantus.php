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
 <style>

.background
{
background-image: url(images/4.jpg);
}
 </style>
 <body class="background">
<div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244348.07985900604!2d95.99797021640622!3d16.878924299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19465f2c42ba9%3A0x6ec6870ccf6c7841!2sEarth%20Group%20of%20Companies%20Co.%2CLtd%20(Head%20Office)!5e0!3m2!1sen!2ssg!4v1647528212792!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         
      </div>
      <p><i class="fa fa-map-marker"></i>  #598 thandar3rd street north okkalapa myanmar.</p>
      <p><i class="fa fa-mobile"></i> 09964900068</p>
      <p><i class="fa fa-globe"></i> contacts myintmyatminhein@gmail.com</p>
      <div style="width: 70%;">
        <h1>Social link for contact</h1>
        <a href="https://www.facebook.com/myint.hein.9404"><i class="fa fa-facebook-square" style="font-size: 35px;color: blue"></i></a>
        <a href="https://www.instagram.com/mf_god_dante/"><i class="fa fa-instagram" style="font-size: 35px; color: red"></i></a>
        <a href="https://www.instagram.com/mf_god_dante/"><i class="fa fa-twitter-square" style="font-size: 35px; color: red"></i></a>
      </div>
      <br>
      <br>
      
 
  <div class="footer">
    <footer style="background:black;color:white;padding:1px;"   >
        &copy;Copyright. All right reserved. Developed by Myint Myat Min Hein.
         Thanks For Visiting!!!
      </footer>
 
  </div>
 

</body>
</html>