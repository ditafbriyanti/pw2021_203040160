<?php
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 12 - 8 Mei 2021
Mempelajari Login & Registrasi
*/
?>

<?php

session_start();
session_destroy();

header("Location: login.php");
exit;
?>