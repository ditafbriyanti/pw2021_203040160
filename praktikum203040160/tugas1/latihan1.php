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
   <table width="235px" cellspacing="3.5px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=6;$row++) {
          echo "<tr>";
          for($col=1;$col<=6;$col++) {
          $total=$row+$col;
          if($total%2==0) {
          echo "<td height=30px width=30px bgcolor=#ADD8E6></td>";

          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#FA8072></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>