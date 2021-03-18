<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 3 Pemrograman Web - 14 Maret 2021
// Membuat latihan array

?>

<!DOCTYPE html>
<html lam="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Modul 3</title>
</head>
<body>
<?php
    $cha =  array(
    array("Cristiano Ronaldo", "Juventus", "100", "76", "30"),
    array("Lionel Messi", "Barcelona", "120", "80", "12"),
    array("Luca Modric", "Real Madrid", "87", "12", "48"),
    array("Mohammad Salah", "Liverpool", "90", "103", "8"),
    array("Neymar Jr", "Paris Saint Germain", "109", "56", "15"),
    array("Sadio Mane", "Liverpool", "63", "30", "70"),
    array("Zlatan Ibrahimovic", "Ac Milan", "100", "10", "12"),
    );
?>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td><b>NO</b></td>
                <td><b>NAMA</b></td>
                <td><b>CLUB</b></td>
                <td><b>MAIN</b></td>
                <td><b>GOL</b></td>
                <td><b>ASSIST</b></td>
            </tr>

            <tr>
                <td>1</td>
                <td><?php echo $cha[0][0] ?></td>
                <td><?php echo $cha[0][1] ?></td>
                <td><?php echo $cha[0][2] ?></td>
                <td><?php echo $cha[0][3] ?></td>
                <td><?php echo $cha[0][4] ?></td>
            </tr>

            <tr>
                <td>2</td>
                <td><?php echo $cha[1][0] ?></td>
                <td><?php echo $cha[1][1] ?></td>
                <td><?php echo $cha[1][2] ?></td>
                <td><?php echo $cha[1][3] ?></td>
                <td><?php echo $cha[1][4] ?></td>
            </tr>

            <tr>
                <td>3</td>
                <td><?php echo $cha[2][0] ?></td>
                <td><?php echo $cha[2][1] ?></td>
                <td><?php echo $cha[2][2] ?></td>
                <td><?php echo $cha[2][3] ?></td>
                <td><?php echo $cha[2][4] ?></td>
            </tr>

            <tr>
                <td>4</td>
                <td><?php echo $cha[3][0] ?></td>
                <td><?php echo $cha[3][1] ?></td>
                <td><?php echo $cha[3][2] ?></td>
                <td><?php echo $cha[3][3] ?></td>
                <td><?php echo $cha[3][4] ?></td>
            </tr>

            <tr>
                <td>5</td>
                <td><?php echo $cha[4][0] ?></td>
                <td><?php echo $cha[4][1] ?></td>
                <td><?php echo $cha[4][2] ?></td>
                <td><?php echo $cha[4][3] ?></td>
                <td><?php echo $cha[4][4] ?></td>
            </tr>

            <tr>
                <td>6</td>
                <td><?php echo $cha[5][0] ?></td>
                <td><?php echo $cha[5][1] ?></td>
                <td><?php echo $cha[5][2] ?></td>
                <td><?php echo $cha[5][3] ?></td>
                <td><?php echo $cha[5][4] ?></td>
            </tr>

            <tr>
                <td>7</td>
                <td><?php echo $cha[6][0] ?></td>
                <td><?php echo $cha[6][1] ?></td>
                <td><?php echo $cha[6][2] ?></td>
                <td><?php echo $cha[6][3] ?></td>
                <td><?php echo $cha[6][4] ?></td>
            </tr>

            <tr>
                <td>#</td>
                <td colspan="2"><b><center>Jumlah</center></b></td>
            <td> 
                <?php 
                    $total = 0;
                    foreach ($cha as $item => $value) {
                        $total += $value[2];
                    }
                    echo $total;
                ?>
            </td>

            <td> 
                <?php 
                    $total = 0;
                    foreach ($cha as $item => $value) {
                        $total += $value[3];
                    }
                    echo $total;
                ?>
            </td>

            <td> 
                <?php 
                    $total = 0;
                    foreach ($cha as $item => $value) {
                        $total += $value[4];
                    }
                    echo $total;
                ?>
            </td>
            </tr>
        </table>
</body>
</html>

