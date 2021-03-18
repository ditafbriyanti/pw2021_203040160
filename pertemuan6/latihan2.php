<?php 
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 6 - Maret 2021
Mempelajari associative array
*/

?>

// <?php
// $mahasiswa = [
//    ["Dita Febriyanti", "203040160", "ditafbriyanti@gmail.com", "Teknik Informatika"],
//    ["Doddy Ferdiansyah", "203040222", "doddy@gmail.com", "Teknik Industri"]; 

// Array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [   "nama" => "Dita Febriyanti",
        "nrp" => "203040160",
        "email" => "ditafbriyanti@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img22.jpg"
    ],

    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "203040222 ",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "img99.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>

</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

