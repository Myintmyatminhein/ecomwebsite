<?php
include 'connection.php';

$did = $_GET['did'];
$sql = "DELETE FROM shirt WHERE IID=$did";
$db->exec($sql);

header("Location: viewshirt.php");
?>

