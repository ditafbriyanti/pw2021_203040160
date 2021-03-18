<?php 
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 5 - Maret 2021
Mempelajari mengenai array
*/

?>

<?php 
$mahasiswa = [
    
    ["Dita Febriyanti", "203040160", "Teknik Informatika", "ditafbriyanti@gmail.com"],
    ["Doddy Ferdiansyah", "203040000", "Teknik Industri", "doddy@gmail.com"],
    ["Eric Son", "203040030", "Teknik Planologi", "ericson@gmail.com"]

];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>








