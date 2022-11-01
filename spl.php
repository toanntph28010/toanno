<?php
$connecion=new PDO("mysql:host=localhost;dbname=toanph28010");
$query="select * from users";
$stmt=$connecion -> prepaare($query);
$stmt-> execute();
$users = $stmt->featAll();
?>