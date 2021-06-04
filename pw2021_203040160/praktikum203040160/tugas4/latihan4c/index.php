<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 4 Pemrograman Web - 30 Maret 2021
// Tugas MySQL, Koneksi Database, Menampilkan Data
?>

<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$products = query("SELECT * FROM bag")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Modul 4</title>
</head>
<body>
  <div class="container">
    <?php foreach ($products as $p) : ?>
      <p class="name">
        <a href="php/detail.php?id=<?= $p['id'] ?>">
            <?= $p["name"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>


