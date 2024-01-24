<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    ul{
      list-style-type: none;
      margin: 0;
      padding: 0;
      background-color: #333;
      display: inline-block;
      width:100%;
    }
    li{
      float: left;
    }
    li a{
      display: block;
      color: white;
      text-decoration: none;
      text-align: center;
      padding: 14px 16px;
    }
    li a:hover
    {background-color: #111;}

      .footer{
        clear: both;
        text-align: center;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: gray;
        color: white;
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
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 2);
      z-index: 1;
    }

    .dropdown-content a{
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;s
      text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content{
      display: block;
    }

    body{
      margin-top: 0px;
    }
  </style>
</head>
<body>
  <div class="header">
    <ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Manage Products</a>
        <div class="dropdown-content">
          <a href="viewdata.php">View Product</a>
          <a href="editprocess.php">Edit Product</a>
          <a href="insertproduct.php">Insert Product</a>

        </div>
      </li>
       <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Edit Promo Products</a>
        <div class="dropdown-content">
          <a href="viewpromo.php">View Product</a>
          <a href="addpromotion.php">Insert Product</a>

        </div>
      </li>
      
       <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Edit Shoes</a>
        <div class="dropdown-content">
          <a href="viewshoes.php">View Shoes</a>
          <a href="addshoes.php">Insert shoes</a>

        </div>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Edit Shirt</a>
        <div class="dropdown-content">
          <a href="viewshirt.php">View Shirt</a>
          <a href="addshirts.php">Insert shirt</a>

        </div>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Edit Pants</a>
        <div class="dropdown-content">
          <a href="viewpants.php">View Pants</a>
          <a href="addpants.php">Insert Pants</a>

        </div>
      </li>
      
      <li><a href="homepage.php">Logout</a></li>
     
    </ul>
  </div>
  <div class="footer">
  
     <p><a href="mailto:ii@exmaple.com">Bestofearth.com</a></p>
  </div>
</body>
</html>