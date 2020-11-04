
<?php

$conn = new PDO("mysql:host=localhost;dbname=kcs27v", 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM `groups` WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$asmuo = $stmt->fetch();
echo "
    <form action='update.php' method='post'>
    <input type='hidden' name='id' value='{$asmuo['id']}' />
    Pavadinimas: <input type='text' name='title' value='{$asmuo['title']}' /><br>
    Adresas: <input type='text' name='address_id' value='{$asmuo['address_id']}' /><br>
    Valstija: <input type='text' name='state' value='{$asmuo['state']}' /><br>
    <input type='submit' value='Atnaujinti'>
    
    [<a href='db.php'>ATGAL</a>]
";