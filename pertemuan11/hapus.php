<?php
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 11 - 6 Mei 2021
Mempelajari Delete, Update & Searching Data
*/
?>

<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus!');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}
