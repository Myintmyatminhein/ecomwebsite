<?php
include 'connection.php';

$eid = $_GET['eid'];
$sql = $db->prepare("SELECT * FROM item WHERE IID='$eid'");
$sql->execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);

?>
<!DOCTYPE html>
<html>
<style type="text/css">
  ul{
      list-style-type: none;
      margin:0;
      padding:0;
      overflow: hidden;
      background-color: #333;
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
          clear:both;
          text-align: center;  
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: gray;
          color: white;
           text-align: center;
          
        }
    li.dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
      display: block;
} 
	form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
   background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
 
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {

  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
<head>
  <body>
  <div class="header">
    <ul>
           <li><a href="viewdata.php">Logout</a></li>   
    </ul>
  </div>
  
<div>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
</head>
<body>
  <div>
	<form method="POST" action="editprocess.php" enctype="multipart/form-data" >
	<input type="hidden" name="id" value="<?php echo $IID; ?>"><br>
	<input type="text" name="name" value="<?php echo $name; ?>"><br>
	<input type="text" name="category" value="<?php echo $category; ?>"><br>
	<input type="text" name="price" value="<?php echo $price; ?>"><br>
	<textarea name="description"><?php echo $description; ?></textarea><br>
	<br>
	<img src="images/<?php echo $photo;?>" width="100" height="100"><br>
	<input type="file" name="newphoto" >
	<input type="hidden" name="oldphoto" value="<?php echo $photo;?>"><br>
	<input type="submit" name="submit" value="UPDATE">
</form>
</div>

</body>
</html>
