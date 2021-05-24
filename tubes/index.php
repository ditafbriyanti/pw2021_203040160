<?php

require 'php/functions.php';
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
  <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="icon" href="image/jpeg" href="assets/img/yj.jpeg">
</head>

<body style="background-color: #F6F3EE;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        Yoojitaurant
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home</a>
          <a class="nav-item nav-link" href="tubes_203040160.sql">Menu Makanan</a>
          <a class="nav-item nav-link btn btn-warning" href="php/login.php">Login <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR:END -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form action="" method="GET">
      <input type="text" name="keyword">
      <button type="submit" name="cari">
        Cari
      </button>
    </form>
  </div>
  </nav>

  <?php if (empty($food)) : ?>
    <h1>Data Tidak Ditemukan</h1>
  <?php else : ?>
    <?php foreach ($food as $f) : ?>
      <a href="../tubes/php/detail.php?id=<?= $f['id'] ?>">
        <?= $f["nama"] ?>
        <br></br>
      </a>
    <?php endforeach; ?>
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
            <p>Go-food</p>
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
      <div class="row pt-3">
        <div class="col text-center">
          <p> &copy; 2021 Yujitaurant.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer;bottom -->


  <!-- button -->
  <a href="#" role="button" id="back-to-top" class="btn btn-light btn-lg back-top"><i class="fas fa-chevron-up"></i></a>

  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

</body>


</html>