<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

//tombol cari diklik
if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $food = query("SELECT * FROM food 
                      WHERE 
                      nama LIKE '%$keyword%'
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
  <title>Yujitaurant</title>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- my icon -->
  <link rel="icon" type="image/jpeg" href="assets/img/yj.jpeg">
  <!-- bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
  <br>
  <br>
  <?php if (empty($food)) : ?>
    <div class="col-8 m-auto">
      <div class="alert alert-danger" role="alert">
        Data Makanan Tidak Ditemukan!
      </div>
      <a href="<?= "index.php" ?>" class="btn btn-success ">Back</a>
    </div>
  <?php else : ?>

    <div class="col-8 m-auto">
      <a href="php/login.php" class="btn btn-outline-primary rounded-0">
        Login
      </a>

      <form action="" method="GET" class="form-inline">
        <div class="form-group mr-9 mt-9 mb-9">
          <input type="text" name="keyword" class="form-control rounded-0" id="inputPassword2" placeholder="Masukan pencarian...">
        </div>
        <button type="submit" name="cari" class="btn btn-primary rounded-0">Search</button>
      </form>

      <table class="table table-striped table-bordered">
        <thead class="bg-primary">
          <tr>
            <th scope="col" class="text-center text-light">No</th>
            <th scope="col" class="text-light">Nama Makanan</th>
            <th scope="col" class="text-center text-light">Detail Makanan</th>
          </tr>
        </thead>
        <tbody class="bg-light">
          <?php $no = 1; ?>
          <?php foreach ($food as $row) : ?>
            <tr>
              <th scope="row" class="text-center"><?= $no++ ?></th>
              <td><?= $row['nama'] ?></td>
              <td class="text-center"><a href="php/detail.php?id=<?= $row['id'] ?>" class="btn btn-info rounded-0">Detail</a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    <?php endif; ?>
    </div>

    <!-- footer -->
    <section>
      <div class="footer-top bg-light">
        <div class="container">
          <hr>
          <div class="row pt-5">
            <div class="col-6 col-md-3">
              <h5 class="pb-3">SHOPPING</h5>
              <p>Shop</p>
              <p>Payment</p>
              <p>Delivery</p>
            </div>
            <div class="col-6 col-md-3">
              <h5 class="pb-3">ABOUT STORE</h5>
              <p>About Store</p>
              <p>Our store</p>
            </div>
            <div class="col-6 col-md-3">
              <h5 class="pb-3">DELIVERY</h5>
              <p>Pick up in store</p>
              <p>Grab-Food</p>
              <p>Go-Food</p>
            </div>
            <div class="col-6 col-md-3">
              <h5 class="pb-3">PAYMENT</h5>
              <p>OVO</p>
              <p>Dana</p>
              <p>BNI</p>
              <p>BCA</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->

    <!-- footer;bottom -->
    <footer>
      <div class="container">
        <div class="row pt-5">
          <div class="col text-center">
            <p> &copy; 2021 Yujitaurant.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer;bottom -->

    <!-- button -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script src="js/script.js"></script>
</body>

</html>