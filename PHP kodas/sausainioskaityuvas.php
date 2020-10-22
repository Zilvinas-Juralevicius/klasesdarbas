<html>
<body>
<?php
if (!isset($_COOKIE['vartotojas'])){
    echo 'Sausainelis pavadinimu "vartotojas" nera sukurtas!';
} else {
    echo 'Sausainelis "vartotojas" yra sukurtas!<br>';
    echo 'Jo reiksme yra:' . $_COOKIE['vartotojas'];
    echo '<a href="trintisausaineli.php">Trinti sausaineli</a>';
}

?>
</body>
</html>