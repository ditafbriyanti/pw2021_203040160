<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 6 Pemrograman Web - 21 April 2021
// Tugas Session, cookie, encryption 
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
  <title>Latihan Modul 6</title>
      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body bgcolor="#DED5BC">
  <div class="container">
    <h1>Ber&nice Store</h1>

      <a href="php/login.php" class="login">
        <button type="submit" class="login">Masuk ke halaman admin</button>
      </a>

    <?php foreach($products as $p) : ?>
      <p class="name">
        <a href="php/detail.php?id=<?= $p['id'] ?>">
            <?= $p["name"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>


