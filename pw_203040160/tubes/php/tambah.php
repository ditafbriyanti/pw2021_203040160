<?php

/* 
Dita Febriyanti
203040160
Kelas D
Pemrograman Web Jumat 13:00
*/

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tambah | Yujitaurant</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- my icon -->
    <link rel="icon" type="image/jpeg" href="assets/img/yj.jpeg">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>Form Tambah Menu Makanan</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlFile1">PILIH GAMBAR</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="judul" required class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" name="penulis" required class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Bahan Dasar</label>
                <div class="col-sm-10">
                    <input type="text" name="stok" required class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" name="stok" required class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="tambah" class="btn btn-primary">TambahData!!</button>
                    <button type="submit">
                        <a href="../index.php" style="text-decoration: none; color: black;">Back</a>
                    </button>

                </div>
            </div>
        </form>
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