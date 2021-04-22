<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 6 Pemrograman Web - 21 April 2021
// Tugas Session, cookie, encryption 
?>

<?php

require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0 ){
    echo "
        <script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('Registrasi Gagal');
            </script>
        ";
    }
}

?>
<form action="" method="post">
    <table>
        <tr>
            <td><label for="username">username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <button type="submit" name="register">REGISTER</button>
</form>