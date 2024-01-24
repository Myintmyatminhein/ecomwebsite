<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
 ul{

       list-style-type: none;
       margin: 0;
       padding: 0;
  display: inline-block;
      width:100%;
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
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
    .background{
      background-size: cover;
   background-position: center;
   height:900px;
   box-sizing: border-box;
   font-family: sans-serif;
    }
</style>
<body>
<div class="header">
    <ul>
      <li class="dropdown"><a href="Homepage.php">Home</a></li> 
      <li><a href="aboutus.php">Abouts Us</a></li> 
      <li class="dropdown"><a href="loginad.php">Admin Login</a></li>


         
         
       <div> <li class="dropdown">
         <a href="javascript:void(0)" class="dropbtn"> Products</a>
      <div class="dropdown-content">
       <a href="shoes.php">Shoes</a>
         <a href="shirt.php">Shirt</a>
         <a href="pants.php">Pants</a>
             
    <li><a href="promotion.php" class="dropbtn"> Promotion </a></li>
   

       <li><a href="contantus.php">Contact Us</a></li> 
       
   <div><a class="btn btn-outline-info" href="mycart.php">MY Cart</a>     </div>  

      </div>
      </li>
      </ul>
  </div>

     	
    </div>
  </div>
</nav>



</body>
</html>
