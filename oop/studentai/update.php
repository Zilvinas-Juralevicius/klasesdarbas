<?php

$conn = new PDO("mysql:host=localhost;dbname=kcs27v", 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare(
    'UPDATE `groups` SET title = :pavadinimas, address_id = :adresas, `state` =  :valstija WHERE id = :id'
);
$stmt->bindParam(':pavadinimas', $_POST['title']);
$stmt->bindParam(':adresas', $_POST['address_id']);
$stmt->bindParam(':valstija', $_POST['state']);
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('location: db.php');
//header('location: edit.php?id='.$_POST['id']);