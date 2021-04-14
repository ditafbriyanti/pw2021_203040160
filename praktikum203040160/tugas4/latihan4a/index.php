<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 4 Pemrograman Web - 30 Maret 2021
// Tugas MySQL, Koneksi Database, Menampilkan Data
?>

<?php

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040160");
// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM bag");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Modul 4</title>
        <style>
            body {
                text-align: center;
            }
            img {
                width: 200px;
            }
    </style>
</head>

    <body>
    <div class="float-md-start">
        <h1>Ber&nice Store</h1>
        <table border="1" cellspacing="0" cellpadding="10"">
        <thead>
            <tr bgcolor="#8FBC8F">
            <th scope="col">NO</th>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            </tr>
        </thead>

    <tbody>
        <?php $i = 1 ?>
        <?php while($bag = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <th scope="row"><?= $i ?></th>
            <td><img src="assets/img/<?= $bag["picture"]; ?>"></td>
            <td><?= $bag["name"] ?></td>
            <td><?= $bag["description"] ?></td>
            <td><?= $bag["price"] ?></td>
            <td><?= $bag["category"] ?></td>
            </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
  </tbody>
  
       </table>
</div>
</body>
</html>
