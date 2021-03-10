<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 2 Pemrograman Web - 9 Maret 2021
// Membuat latihan function

?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .style1 {
            width: 50%;
            margin: auto;
            border: 2px solid black;
            box-shadow: 0 0 15px #000;
            border-radius: 5px;
        }

        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight:  bolder;
            margin-left: 15px;
        }
    </style>
</head>

<body>
<?php 

function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2") {
    return "<div class = $style1 ><p class = $style2 > $tulisan </p></div>";
}

echo gantiStyle("Selamat datang di praktikum PW");
?>

</body>
</html>








