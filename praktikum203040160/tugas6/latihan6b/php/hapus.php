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
    $id = $_GET['id'];

        if (hapus ($id) > 0) {
            echo "<script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'admin.php';
            </script>";
        }
    
?>