<?php
include 'connection.php';
$id =$_POST['id'];
$name=$_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$old= $_POST['oldphoto'];
$new= $_FILES['newphoto']['name'];

if($new != ""){
    $updatephoto = $new;
    move_uploaded_file($_FILES['newphoto']['tmp_name'], "images/".$new);
}
else {
    $updatephoto = $old;
}
$sql=$db->prepare("UPDATE item SET IID='$id', name='$name', category='$category',
price='$price', description='$description', photo='$updatephoto' WHERE IID='$id'");
$sql->execute();
header('Location: viewdata.php');
?> 