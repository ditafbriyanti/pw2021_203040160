<?php 
/* 
Dita Febriyanti
203040160
https://github.com/ditafbriyanti/pw2021_203040160
Pertemuan 4 - Februari 2021
Mempelajari mengenai function PHP
*/


// Date
// Untuk menammpilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 8, 25, 1985));

// strtotime
// echo date("l", strtotime("25 aug 1985"));

?>