<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
$food = query("SELECT * FROM food");

if (isset($_POST['cari']))
  $food = cari($_POST['keyword']);

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
</head>

<body style="background-color: #F6F3EE;">
  <div class="container">
    <nav class="navbar navbar-light" style="background-color:lightblue;">
      <a class="navbar-brand">Halaman Admin</a>
      <a class="nav-item nav-link" href="tambah.php">Tambah Menu</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
      <form class="form-inline" action="" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="cari" name="keyword">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
      </form>
    </nav>
  </div>

  <table align=center border="1px solid black" ; cellpadding=10; cellsapcing="7" class="p-3 mb-2 bg-light">
    <tr bgcolor=silver>
    <tr>
      <th>id</th>
      <th>Opsi</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Bahan Dasar</th>
      <th>Deskripsi</th>
    </tr>
    <?php if (empty($food)) : ?>
      <tr>
        <td colspan="7">
          <h3>Data Tidak Di Temukan</h3>
        </td>
      </tr>
    <?php else : ?>
      <?php foreach ($food as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $row['id']; ?>"> <button type="button" class="btn btn-outline-primary">Ubah</button></a>
            <br>
            <br>
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data??')"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $row["Foto"]; ?>" alt=""></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["harga"]; ?></td>
          <td><?= $row["bahan_dasar"]; ?></td>
          <td><?= $row["Deskripsi"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>