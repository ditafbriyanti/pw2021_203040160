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
    session_destroy();
    setcookie('username', '', time() - 3600);
    setcookie('hash' , '', time() - 3600);
    header("Location: ../index.php");
    die;
?>