<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 1 Pemrograman Web - 2 Maret 2021
// Membuat latihan struktur kontrol

?>

<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Modul 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th></th>
             <?php for($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
             <?php endfor; ?>
         </tr>

              <!-- Tambahkan baris kode php untuk menampilkan bagian body table -->
              <tr>
              <th>Baris 1</th>
              <?php for($s = 1; $s <= 5; $s++) :?>
                <th>Baris <?= $s;?>, Kolom <?= $s; ?> </th>
              <?php endfor;?>
              </tr>

              <tr>
              <th>Baris 2</th>
              <?php for($s = 1; $s <= 5; $s++) :?>
                <th>Baris <?= $s;?>, Kolom <?= $s; ?> </th>
              <?php endfor;?>
              </tr>

              <tr>
              <th>Baris 3</th>
              <?php for($s = 1; $s <= 5; $s++) :?>
                <th>Baris <?= $s;?>, Kolom <?= $s; ?> </th>
              <?php endfor;?>
              </tr>

              <tr>
              <th>Baris 4</th>
              <?php for($s = 1; $s <= 5; $s++) :?>
                <th>Baris <?= $s;?>, Kolom <?= $s; ?> </th>
              <?php endfor;?>
              </tr>

              <tr>
              <th>Baris 5</th>
              <?php for($s = 1; $s <= 5; $s++) :?>
                <th>Baris <?= $s;?>, Kolom <?= $s; ?> </th>
              <?php endfor;?>
              </tr>

                

    </table>
</body>
</html>    