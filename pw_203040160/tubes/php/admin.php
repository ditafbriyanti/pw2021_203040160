<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

//ketika tombol cari di klik
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $food = query("SELECT * FROM food
        WHERE
      picture       LIKE '%$keyword%' OR
      nama          LIKE '%$keyword%' OR
      harga         LIKE '%$keyword%' OR
      bahan_dasar   LIKE '%$keyword%' OR
      deskripsi     LIKE '%$keyword%' 
      ");
} else {
    $food = query("SELECT * FROM food");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Yujitaurant</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- my icon -->
    <link rel="icon" type="image/jpeg" href="assets/img/yj.jpeg">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body bgcolor="#D8BFD8">
    <div class="container-lg">
        <table border="1px" ; cellpadding=10; cellspacing="1" class="table table-striped">
            <form action="" method="get">
                <div class="form-row align-items-center mb-1">
                    <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="search" name="keyword" autofocus>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary" name="cari">Submit</button>
                    </div>
                </div>
            </form>
            <a href="tambah.php"><button class="btn btn-outline-primary mb-1">Tambah Data</button></a>
            <a href="logout.php"><button class="btn btn-outline-danger mb-1 ml-1">Logout</button></a>
            <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Bahan Dasar</th>
                <th>Deskripsi</th>
            </tr>
            <?php if (empty($food)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($food as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td> <button><a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a></button> </li>
                            <button><a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('hapus data?');">Hapus</a></button> </li>
                        </td>
                        <td><img src="../Assets/img/<?= $row['gambar'] ?>" class="img-thumbnail" width="250px"></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["bahan_dasar"]; ?></td>
                        <td><?= $row["deskripsi"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif ?>
        </table>

    </div>

</body>

</html>