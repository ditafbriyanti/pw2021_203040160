<?php
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 9 - 5 Mei 2021
Mempelajari PHP & MySQL
*/
?>

<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows  = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

?>