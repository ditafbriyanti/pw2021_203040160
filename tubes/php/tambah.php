<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('Data berhasil ditambahkan!');
      document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
      ('Data gagal ditambahkan!');
      document.location.href = 'admin.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yujitaurant</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="image/jpeg" href="../tubes/assets/img/yj.jpeg">
</head>

<body style="background-color: #F6F3EE;">
  <div class="container bg-white" style="width:500px; margin-bottom:50px;">
    <h3>Form Tambah Menu Makanan</h3>

    <form action="" method="POST" enctype="multipart/form-data">
      <ul>
        <li>
          <label for="foto">
            Foto :
            <input type="text" name="foto" autofocus required>
          </label>
        </li>
        <li>
          <label for="nama">
            Nama :
            <input type="text" name="nama" required>
          </label>
        </li>
        <li>
          <label for="harga">
            Harga :
            <input type="text" name="harga" required>
          </label>
        </li>
        <li>
          <label for="bahan_dasar">
            Bahan Dasar :
            <input type="text" name="bahan_dasar" required>
          </label>
        </li>
        <li>
          <label for="deskripsi">
            Deskripsi :
            <input type="text" name="deskripsi" required>
          </label>
        </li>
        <li>
          <button type="submit" name="tambah" class="btn btn-outline-primary">Tambah data!</button>
          <button type="submit" class="btn btn-outline-primary">
            <a href="admin.php" style=" text-decoration:none;">Kembali</a>
          </button>
        </li>
      </ul>
    </form>

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