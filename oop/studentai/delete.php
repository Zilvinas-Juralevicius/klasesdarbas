<?php

$conn = new PDO("mysql:host=localhost;dbname=kcs27v", 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('DELETE FROM `groups` WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

header('location: db.php');