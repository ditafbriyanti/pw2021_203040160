<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 3 Pemrograman Web - 14 Maret 2021
// Membuat latihan array

?>

<!DOCTYPE html>
<html lam="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Modul 3</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
    <?php
    $cha = array();
        $cha["<strong>Cristiano Ronaldo</strong>"] = "Juventus";
        $cha["<strong>Lionel Messi</strong>"] = "Barcelona";
        $cha["<strong>Luca Modric</strong>"] = "Real Madrid";
        $cha["<strong>Mohammad Salah</strong>"] = "Liverpool";
        $cha["<strong>Neymar Jr</strong>"] = "Paris Saint Germain";
        $cha["<strong>Sadio Mane</strong>"] = "Liverpool";
        $cha["<strong>Zlatan Ibrahimovic</strong>"] = "Ac Milan";
    ?>
        <ol>
            <?php 
                foreach ($cha as $a => $isi) {
                    echo "<tr><td>$a</td><td> : </td><td>$isi</td></tr>";
                }
           ?>
 
        </ol>
    </table>