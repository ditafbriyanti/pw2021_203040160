<?php 
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 7 - Maret 2021
Mempelajari get & post
*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="Latihan4.php" method="post">
    Masukan nama : 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
    </br>
</form>

</body>
</html>