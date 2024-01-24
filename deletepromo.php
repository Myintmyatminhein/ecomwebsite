<?php
include 'connection.php';

$did = $_GET['did'];
$sql = "DELETE FROM promoitem WHERE IID=$did";
$db->exec($sql);

header("Location: viewpromo.php");
?>
