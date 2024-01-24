
<?php
include("connection.php");
$name='';
$password='';
$cusid='';
if(isset($_POST['btnSubmit'])){
$name=$_POST['txtname'];
  $password=$_POST['txtpass'];

   
    $sql="select * from admin where  adname='$name' and adpassword='$password'";
    foreach($db->query($sql) as $row)
    {
      $name=$row['adname'];
      $cusid=$row['adid'];
    }
    if($cusid!=0)
    {
      
     header('Location: adminhomepage.php');
    }
    else
    {
      echo "<script>alert('wrong useremail and password!')</script>";
    }}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {font-family: Arial,Helvetica,  sans-serif;}
		form{border: 3px solid #f1f1f1;}
		input[type=text], input[type=password] {
  		width: 100%;
 		 padding: 12px 20px;
  		margin: 8px 0;
  		display: inline-block;
  		border: 1px solid #ccc;
 			 box-sizing: border-box;
}
		button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
span psw{
	float: right;
	padding-top: 16px;
}
img{
	border-radius: 50px;
	width: 80px;
}
.imgcontainer{-
	text-align: center;
  margin: 24px 0 12px 0;
}
	</style>


</head>
<body>
	<form method="Post">
		<div>
			<label for="uname"><b>Username</b></label>
			<input type="text" name="txtname" required="" placeholder="Enter username!">
			<label for="upassword"><b>Userpassword</b></label>
			<input type="password" name="txtpass" required="" placeholder="Enter userpassword!">
			<button type="submit" name="btnSubmit">Log in</button>

		</div>
		<div>
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot<a href="#">password?</a></span>
		</div>
	</form>

</body>
</html>