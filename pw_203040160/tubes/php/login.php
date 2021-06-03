<?php
session_start();

require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
        }

        // jika remember dicentang
        if (isset($_POST['remember'])) {
            setcookie('username', $row['username'], time() + 60 * 60 * 24);
            $hash = hash('sha256', $row['id'], false);
            setcookie('hash', $hash, time() + 60 * 60 * 24);
        }

        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }

        header("Location: ../index.php");
        die;
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Yujitaurant</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <!-- my icon -->
    <link rel="icon" type="image/jpeg" href="../assets/img/yj.jpeg">
</head>

<body style=" background-color: #F6F3EE;">
    <span class="border border-secondary">
        <div class="container" style="width: 500px;">
            <nav class="navbar navbar-dark bg-primary">
                <span class="navbar-brand mb-0 h1">Form Login</span>
            </nav>

            <?php if (isset($login['error'])) : ?>
                <p style="color: red; font-style: italic;">Username atau Password salah!</p>
            <?php endif; ?>

            <form action="" method="POST" class="bg-light" style="padding: 5px;">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>

                <div class="registrasi">
                    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                </div>
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