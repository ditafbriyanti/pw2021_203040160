<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 3 Pemrograman Web - 14 Maret 2021
// Membuat latihan array

?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Latihan Modul 3</title>
</head>

<body>
        <?php 
            $pemain = array();

                $pemain[] = "Mohammad Salah";
                $pemain[] = "Cristiano Ronaldo";
                $pemain[] = "Lionel Messi";
                $pemain[] = "Zlatan Ibrahimovic";
                $pemain[] = "Neymar Jr";
        ?>

                    <ol>
                        <?php
                        echo "<h1>Daftar pemain bola terkenal</h1>";
                            for ($i=0; $i < count($pemain); $i++) {
                            echo "<li>$pemain[$i]</li>";
                            }
                        ?>
                    </ol>

        <?php 
            $hasil = array_push($pemain, "Luca Modric", "Sadio Mane"); 
        ?>
                    <hr>
                    <ol>
                            <?php 
                            echo "<h1>Daftar pemain bola terkenal baru</h1>";
                                for ($i=0; $i < count($pemain); $i++) {
                                    echo "<li>$pemain[$i]</li>";
                                }
                            ?>
                    
                    </ol>
                    </hr>


</body>
</html>





