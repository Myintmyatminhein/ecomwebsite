<?php
include 'adminheader.php';
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
	background-size: cover;
	background-position: center;
	height:900px;
	box-sizing: border-box;
	font-family: sans-serif;
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
   <h1 style="  text-align:center;margin:30px;font-family:Rosewood Std Regular;font-size:100px;color: cyan;">Admin site</h1>

   <div>
<body class="background">


<div class="row"><br>
<?php 
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

?>
<?php } ?>
</div>
<br>
<br>

 


</body>
