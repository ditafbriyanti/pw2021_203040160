<?php

/* 
Dita Febriyanti
203040160
Kelas D
Pemrograman Web Jumat 13:00
*/

require 'functions.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
          alert('Registrasi berhasil!')
          document.location.href = 'login.php';
          </script>";
    } else {
        echo "<script>
          alert('Registrasi gagal')
          document.location.href = 'login.php';
          </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Yujitaurant</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <!-- my icon -->
    <link rel="icon" type="image/jpeg" href="../assets/img/yj.jpeg">
</head>

<body style="background-color: #F6F3EE;">
    <div class="container" style="padding: 15px; width: 500px;">
        <nav class="navbar navbar-dark bg-primary">
            <span class="navbar-brand mb-0 h1">Form Registrasi</span>
        </nav>
        <form action="" method="post" class="bg-light" style="padding: 5px;">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="register" style="margin: 10px;">Daftar</button>
        </form>
        <nav class="navbar navbar-dark bg-primary">
            <span class="navbar-brand mb-0 h1"></span>
            <br>

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