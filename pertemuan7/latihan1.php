<?php 
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 7 - Maret 2021
Mempelajari get & post
*/

?>

<?php 
// $_GET
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
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
    
    <a href="Latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    
    </li>
<?php endforeach; ?>
</ul>


</body>

</html>





