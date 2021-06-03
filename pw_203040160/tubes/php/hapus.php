<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
    header("location: admin.php");
    exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
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
