<?php
include 'adminheader.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item");
$sql->execute();
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
<h1> Insert prodcuts</h1>
  <body> 
<div>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
</head>
<body>
  <div>
	<form action="" method="POST" enctype="multipart/form-data">
	Enter item Name: <input type="text" name="name"><br>
	Enter Category: <input type="text" name="category"><br>
	Enter Price: <input type="text" name="price"><br>
	Upload Photo: <input type="file" name="img"><br><br>
	Enter Description: <textarea name="description"></textarea><br>
	<input type="submit" name="submit" value="submit">
</form>
</div>

</body>
</html>


<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $error= array();
    $filename=$_FILES['img']['name'];
    $filesize=$_FILES['img']['size'];
    $filetype=$_FILES['img']['type'];
    $filetmp= $_FILES['img']['tmp_name'];
    $file_ext = explode("/", $filetype);
    $filex = strtolower(end($file_ext));
    $extension = array("jpg","jpeg","png","gif");
    
    if (in_array($filex, $extension)==FALSE) {
        $error[]= "invalid file type";
    }
    else if($filesize > 2097152){
        $error[]= "file size is too big";
    }
    else if(empty($error)==TRUE){
        move_uploaded_file($filetmp, "images/".$filename);        
    }
    else {
        print_r($error);
    }
}else return FALSE;

try {
    $sql=$db->prepare("INSERT INTO item(name, category, price, photo, description)
           VALUES(?,?,?,?,?)");
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $photo = $filename;
    $description = $_POST['description'];
    
    if ($sql->execute(array($name,$category,$price,$photo,$description))) {
        
    }
    else {
        echo "record adding failed";
    }
           
    
} catch (PDOException $e) {
    echo "Error : ".$e->getMessage();
}
?>