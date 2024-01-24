<?php
include 'connection.php';

$did = $_GET['did'];
$sql = "DELETE FROM shoes WHERE IID=$did";
$db->exec($sql);

header("Location: viewshoes.php");
?>

