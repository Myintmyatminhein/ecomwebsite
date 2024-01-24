<?php

try {
    $db = new PDO("mysql:hostname=localhost;port=3306;dbname=57sw","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error : ".$e->getMessage();
}

?>