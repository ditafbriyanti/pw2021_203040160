<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 5 Pemrograman Web - 14 April 2021
// Tugas CRUD, Searching
?>

<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$bag = query("SELECT * FROM bag");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Modul 5</title>
</head>
<body bgcolor="#D8BFD8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="container">
    <table border="1" cellpadding="13" cellspacing="0">
        <tr bgcolor="#F5F5F5">
            <th>#</th>
            <th>opsi</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($bag as $products) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $products['name']; ?></td>
                <td><?= $products['description']; ?></td>
                <td><?= $products['price']; ?></td>
                <td><?= $products['category']; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
