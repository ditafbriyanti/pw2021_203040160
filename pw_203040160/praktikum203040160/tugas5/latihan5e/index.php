<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 5 Pemrograman Web - 14 April 2021
// Tugas CRUD, Searching
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
  <title>Latihan Modul 5</title>
      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body bgcolor="lavender" id="home" class="scrollspy">
  <div class="container">
    <h1>Ber&nice Store</h1>
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


