<?php 
// Dita Febriyanti
// 203040160
// Jumat 13:00
// https://github.com/ditafbriyanti/pw2021_203040160.git
// Praktikum 5 Pemrograman Web - 14 April 2021
// Tugas CRUD, Searching
?>

<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");;
    mysqli_select_db($conn, "pw_tubes_203040160") or die("Database salah!");;

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $bags = [];
    while ($bag = mysqli_fetch_assoc($result)) {
        $bags[] = $bag;
    }
    return $bags;
}


?>