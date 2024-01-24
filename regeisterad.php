

<?php
include('connection.php');

if(isset($_POST['btnSubmit']))

{
$cusname =$_POST['uname'];

$password=$_POST['psw'];


  $sql= "insert into admin(adname,adpassword)values ('$cusname', '$password')";
  $db->exec($sql);
  echo "data is inserted successfully";
}


?>








<!DOCTYPE html>
<html>
<head>
  <title> Register Page</title>

<link rel="stylesheet" href="register.css">

</head>
<body>



  <form method="POST">
 
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="submit" name="btnSubmit" value="Submit">
  
  
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
