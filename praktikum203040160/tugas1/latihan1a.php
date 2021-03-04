<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 1 Pemrograman Web - 2 Maret 2021
// Membuat latihan struktur kontrol

?>

<!DOCTYPE html>
     <html> 
     <head> 
  <title>Latihan Modul 1</title>
  <meta charset=UTF-8">
  </head>
  <body> 
   <table>
      <?php
      for($i = 1; $i <= 3; $i++) {
            for($u = 1; $u <= 3; $u++) {
                  echo "Ini perulangan ke ($i,$u) <br>" ;
            }
      }
          ?>
  </table>
  </body>
  </html>