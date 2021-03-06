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
    $conn = mysqli_connect("localhost", "root", "") ;
    mysqli_select_db($conn, "pw_tubes_203040160") ;

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

//fungsi untuk menambahkan data di dalam database
function tambah($bag)
{
    $conn = koneksi();

    $picture = htmlspecialchars($bag["Picture"]);
    $name = htmlspecialchars($bag["Name"]);
    $description = htmlspecialchars($bag["Description"]);
    $price = htmlspecialchars($bag["Price"]);
    $category = htmlspecialchars($bag["Category"]);

    $query = "INSERT INTO bag VALUES
			  ('', '$picture', '$name', '$description', '$price', '$category', '')";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

?>