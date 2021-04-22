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
require 'functions.php';

//ketika tombol cari di klik
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $bags = query("SELECT * FROM bag
        WHERE
      picture       LIKE '%$keyword%' OR
      name          LIKE '%$keyword%' OR
      description   LIKE '%$keyword%' OR
      price         LIKE '%$keyword%' OR
      category      LIKE '%$keyword%' 
      ");
  } else {
    $products = query("SELECT * FROM bag");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Modul 6</title>
</head>
<body bgcolor="#D8BFD8">
    <br>
        <div class="add" style="width:150px" ;>
            <a href="tambah.php" style="text-decoration:none;color:#000;">Tambah Data</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
        <form action="" method="get" style="float: right;">
          <input type="text" name="keyword" size="30" placeholder="Cari Disini!" autofocus>
          <button type="submit" name="cari">Cari</button>
        </form>
    </br>  
	<div class="container">
    <table border="1" cellpadding="13" cellspacing="0">
    <thead>
        <tr bgcolor="#F5F5F5">
            <th>#</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php if (empty($products)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>     
        <?php $i = 1; ?>
        <?php foreach ($products as $p) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><img src="../assets/img/<?= $p["picture"]; ?>"></td>
                <td><?= $p['name']; ?></td>
                <td><?= $p['description']; ?></td>
                <td><?= $p['price']; ?></td>
                <td><?= $p['category']; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $p["id"]; ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('yakin?');"><button>Hapus</button></a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>    
    </table>
    </div>
</body>
</html>

