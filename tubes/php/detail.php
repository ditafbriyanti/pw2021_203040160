<?php

// Mengecek apakah ada id yang dikirimkan
// jika tidak ada maka akan dikembalikan ke index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$food = query("SELECT * FROM food WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yujitaurant</title>
  <link rel="icon" href="image/jpeg" href="../tubes/assets/img/yj.jpeg">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../js/bootstrap.min.js">
  <style>
    h5,
    p {
      color: #BDBBAD;
    }
  </style>
</head>

<body style="background-color: #F6F3EE;">
  <div class="container" style="padding: 40px;">
    <div class="card mb-4">
      <img src="../assets/img/<?= $food["gambar"]; ?>">
      <div class="card-body" style="text-align: center; background-color: cornflowerblue;">
        <h5 class="card-title"><?= $food["nama"]; ?></h5>
        <p class="card-text">Harga: <?= $food["harga"]; ?></p>
        <p class="card-text">Bahan Dasar: <?= $food["bahan_dasar"]; ?></p>
        <p class="card-text">Deskripsi: <?= $food["deskripsi"]; ?></p>
        <button class="btn btn-light" style=" text-decoration:none;"><a href="../index.php">Kembali</a></button>
      </div>
    </div>
  </div>

  <!-- footer;bottom -->
  <footer>
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p> &copy; 2021 Yujitaurant.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer;bottom -->


</body>

</html>