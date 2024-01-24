<?php
include 'connection.php';

$did = $_GET['did'];
$sql = "DELETE FROM item WHERE IID=$did";
$db->exec($sql);

header("Location: viewdata.php");
?>