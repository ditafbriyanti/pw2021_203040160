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
$food = query("SELECT * FROM food WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yujitaurant</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- my icon -->
    <link rel="icon" type="image/jpeg" href="assets/img/yj.jpeg">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<body style="background-color: #F6F3EE;">
    <div class="container" style="padding: 40px;">
        <div class="card mb-4">
            <img src="../assets/img/<?= $food["gambar"]; ?>">
            <div class="card-body" style="text-align: center; background-color: #C9C0B4;">
                <p class="card-title bold"><?= $food["nama"]; ?></p>
                <p class="card-text">Harga: <?= $food["harga"]; ?></p>
                <p class="card-text">Bahan Dasar: <?= $food["bahan_dasar"]; ?></p>
                <p class="card-text">Deskripsi: <?= $food["deskripsi"]; ?></p>
                <button class="btn btn-light" style=" text-decoration:none;"><a href="../index.php">Back</a></button>
            </div>
        </div>
    </div>

</html>

</html>