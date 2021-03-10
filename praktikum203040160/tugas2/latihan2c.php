<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 2 Pemrograman Web - 9 Maret 2021
// Membuat latihan function

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
    .bolapink {
        background: salmon;
        border:1px solid black;
        border-radius: 50px;
        height: 50px;
        width: 50px;
        display: inline-block;
        margin: 5px;
        text-align: center;
        line-height: 50px;

</style>

</head>
<body>

    <div>
    <?php
    function tumpukanbola($Bola){
         for( $i = 1; $i <=$Bola; $i++){
        echo"<br>";
             for($j=1; $j<=$i; $j++){
               echo "<div class='bolapink'>$i</div>";
            }  
         } 
        }
        echo tumpukanbola(5);
    ?>
    </div>

</body>
</html>






