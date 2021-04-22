<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 6 Pemrograman Web - 21 April 2021
// Tugas Session, cookie, encryption 
?>

<?php 
    require 'functions.php';
    if(isset($_POST['tambah'])){
        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Modul 6</title>
         <link rel="stylesheet" href="../css/style.css">
</head>
<body bgcolor="lavender">
    <div class="from">
        <h1> Form Tambah Data Tas </h1>
        <form action="" method="post">
            <ul>
                <li> 
                    <label for="name">Name :</label><br>
                    <input type="text" name="name" id="name" required><br></br>
                </li>
                <li> 
                    <label for="description">Description :</label><br>
                    <input type="text" name="description" id="description" required><br></br>
                </li>
                <li> 
                    <label for="price">Price :</label><br>
                    <input type="text" name="price" id="price" required><br></br>
                </li>
                <li> 
                    <label for="category">Category :</label><br>
                    <select name="category" id="category" required>
                        <option value="">---------- Select Category ----------</option>
                        <option value="Tas Wanita">Tas Wanita</option>
                        <option value="Tas Unisex">Tas Unisex</option>
                    </select>
                </li>
                <br>
                <button type="submit" name="tambah">Tambah Data!</buttom>
                <button type="submit">
                    <a href="../index.php" style="text-decoration: none; color: black;">Back</a>
                </button>    
                </br>
            </ul>
        </form>    
    </div>
</body>
</html>






