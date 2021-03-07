<?php 
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 4 - Februari 2021
Mempelajari mengenai function PHP
*/

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Dita"); ?></h1>
</body>
</html>        






