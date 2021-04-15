<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 5 Pemrograman Web - 14 April 2021
// Tugas CRUD, Searching
?>

<?php
    // Mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $products = query("SELECT * FROM bag WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Modul 5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="Lavender">
    <div class="container">
        <div class="picture">
            <img width="300px" src="../assets/img/<?= $products["picture"]; ?>" alt="">
        <div class="keterangan">
            <p><?= $products["name"]; ?></p>
            <p><?= $products["description"]; ?></p>
            <p><?= $products["price"]; ?></p>
            <p><?= $products["category"]; ?></p>
        <button><a href="../index.php">Kembali</a></button>
    </div>
    </div>
    </div>
</body>
</html>
