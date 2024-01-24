<form action="" method="POST" enctype="multipart/form-data">
	Enter item Name: <input type="text" name="name"><br>
	Enter Category: <input type="text" name="category"><br>
	Enter Price: <input type="text" name="price"><br>
	Upload Photo: <input type="file" name="img"><br> 
	Enter Description: <textarea name="description"></textarea><br>
	<input type="submit" name="submit" value="submit">
</form>
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