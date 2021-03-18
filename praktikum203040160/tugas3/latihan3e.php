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
        <style type="text/css">
        
        body {
            text-align: center;
        }
        img {
            width: 200px;
        }
        </style>
</head>

        <body>
            <h1>Ber&nice Store</h1>

            <?php 
                $bag = array(
                    array("<img src = 'img/img1.jpg'>", "Epyra Antique White Handbag ", "Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.", "Rp. 344.999", "Tas Wanita"),
                    array("<img src = 'img/img2.jpg'>", "Epyra Yellow Handbag ", "Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.", "Rp. 344.999", "Tas Wanita"),
                    array("<img src = 'img/img3.jpg'>", "Epyra Hot Pink Handbag ", "Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.", "Rp. 344.999", "Tas Wanita"),
                    array("<img src = 'img/img4.jpg'>", "Epyra Medium Purple Handbag ", "Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.", "Rp. 344.999", "Tas Wanita"),
                    array("<img src = 'img/img5.jpg'>", "Elwin Black Handbag ", "Tas wanita dengan bahan togo yang nyaman dipakai sehari-hari.", "Rp. 337.999", "Tas Wanita"),
                    array("<img src = 'img/img6.jpg'>", "Essic Black Totebag ", "Tas dengan bahan kanvas yang nyaman dipakai sehari-hari.", "Rp. 124.999", "Tas Unisex"),
                    array("<img src = 'img/img7.jpg'>", "Essic Black Totebag ", "Tas dengan bahan kanvas yang nyaman dipakai sehari-hari.", "Rp. 124.999", "Tas Unisex"),
                    array("<img src = 'img/img8.jpg'>", "Eluina Maroon Handbag ", "Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.", "Rp. 344.999", "Tas Wanita"),
                    array("<img src = 'img/img9.jpg'>", "Equin Peru Handbag ", "Tas dengan bahan taiga yang nyaman dipakai sehari-hari.", "Rp. 318.999", "Tas Unisex"),
                    array("<img src = 'img/img10.jpg'>", "Erpilla Saddle Brown Handbag ", "Tas dengan bahan goatskin yang nyaman dipakai sehari-hari.", "Rp. 267.999", "Tas Unisex")
                );
            ?>

        <table border="1" cellspacing="0" cellpadding="10">
                    <tr bgcolor="#8FBC8F">
                        <td><h3>Picture</h3></td>
                        <td><h3>Name</h3></td>
                        <td><h3><center>Description</center></h3></td>
                        <td><h3>Price</h3></td>
                        <td><h3>Category</h3></td>
                    </div>
                    </tr>

                    <tr>
                        <td><?php echo $bag[0][0] ?></td>
                        <td><?php echo $bag[0][1] ?></td>
                        <td><?php echo $bag[0][2] ?></td>
                        <td><?php echo $bag[0][3] ?></td>
                        <td><?php echo $bag[0][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[1][0] ?></td>
                        <td><?php echo $bag[1][1] ?></td>
                        <td><?php echo $bag[1][2] ?></td>
                        <td><?php echo $bag[1][3] ?></td>
                        <td><?php echo $bag[1][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[2][0] ?></td>
                        <td><?php echo $bag[2][1] ?></td>
                        <td><?php echo $bag[2][2] ?></td>
                        <td><?php echo $bag[2][3] ?></td>
                        <td><?php echo $bag[2][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[3][0] ?></td>
                        <td><?php echo $bag[3][1] ?></td>
                        <td><?php echo $bag[3][2] ?></td>
                        <td><?php echo $bag[3][3] ?></td>
                        <td><?php echo $bag[3][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[4][0] ?></td>
                        <td><?php echo $bag[4][1] ?></td>
                        <td><?php echo $bag[4][2] ?></td>
                        <td><?php echo $bag[4][3] ?></td>
                        <td><?php echo $bag[4][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[5][0] ?></td>
                        <td><?php echo $bag[5][1] ?></td>
                        <td><?php echo $bag[5][2] ?></td>
                        <td><?php echo $bag[5][3] ?></td>
                        <td><?php echo $bag[5][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[6][0] ?></td>
                        <td><?php echo $bag[6][1] ?></td>
                        <td><?php echo $bag[6][2] ?></td>
                        <td><?php echo $bag[6][3] ?></td>
                        <td><?php echo $bag[6][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[7][0] ?></td>
                        <td><?php echo $bag[7][1] ?></td>
                        <td><?php echo $bag[7][2] ?></td>
                        <td><?php echo $bag[7][3] ?></td>
                        <td><?php echo $bag[7][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[8][0] ?></td>
                        <td><?php echo $bag[8][1] ?></td>
                        <td><?php echo $bag[8][2] ?></td>
                        <td><?php echo $bag[8][3] ?></td>
                        <td><?php echo $bag[8][4] ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $bag[9][0] ?></td>
                        <td><?php echo $bag[9][1] ?></td>
                        <td><?php echo $bag[9][2] ?></td>
                        <td><?php echo $bag[9][3] ?></td>
                        <td><?php echo $bag[9][4] ?></td>
                    </tr>

        </table>
            
        </body>
</html>



