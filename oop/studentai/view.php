<?php

$conn = new PDO("mysql:host=localhost;dbname=kcs27v", 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM `groups` WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$asmuo = $stmt->fetch();
echo "
    Pavadiniams: {$asmuo['title']}<br>
    Adresas: {$asmuo['address_id']}<br>
    Valstija: {$asmuo['state']}<br>
    [<a href='db.php'>ATGAL</a>]
";
