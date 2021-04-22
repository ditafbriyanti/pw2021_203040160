<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 6 Pemrograman Web - 21 April 2021
// Tugas Session, cookie, encryption 
?>

<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman login admin 
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// cek cookie 
if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    //ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' " );
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256' , $bag['id'], false)) {
        $_SESSION['username'] = $bag['username'];
        header("Location: admin.php");
        exit;
    }
}


// Login
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if(mysqli_num_bags($cek_user) > 0) {
        $bag = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $bag['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256' , $bag['id'] , false);

            // jika remember me dicentang
            if(isset($_POST['remember'])) {
                setcookie('username' , $bag['username'] , time() + 60 * 60 * 24);
                $hash = hash('sha256', $bag['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256' , $bag['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Modul 6</title>
      <link rel="stylesheet"  href="css/style.css">
</head>

    <h3>Login</h3>
    <form class="form" action="" method="post">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau Password salah</p>
        <?php endif; ?>
        <table bgcolor= "#F2F0E6">
            <tr bgcolor="#D5D1C3">
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr bgcolor="#D5D1C3">
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <div class="remember">
            <input type="checkbox" name="remember">
            <label for="remember">Remember me</label>
        </div>
        <button type="submit" name="submit">Login</button>
        <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </form>
    
</div>
</body>
</html>