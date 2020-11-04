<?php

use KCS\Helper;

require_once __DIR__.'/../../vendor/autoload.php';

$conn = new PDO("mysql:host=localhost;dbname=kcs27v", 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT id, title as pavadinimas, address_id as adresas, `state` as valstija  FROM `groups`');
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

Helper::spausdintiLenteleje($stmt->fetchAll());
