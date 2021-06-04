<?php

/* 
Dita Febriyanti
203040160
Kelas D
Pemrograman Web Jumat 13:00
*/

// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "pw2021_203040160") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_203040160") or die("Database Salah");

    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    global $koneksidb;
    $result = mysqli_query($koneksidb, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $nama_file = $_FILES['display']['nama'];
    $tipe_file = $_FILES['display']['harga'];
    $ukuran_file = $_FILES['display']['bahan_dasar'];
    $error = $_FILES['display']['deskripsi'];
    $tmp_file = $_FILES['display']['gambar'];


    // ketika tidak ada gambar yang dipilih 
    if ($error == 4) {
        // echo "<script>
        //       alert('pilih gambar terlebih dahulu');
        //       </script>";
        return 'np.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5mb
    if ($ukuran_file > 5000000) {
        echo "<script>
          alert('ukuran terlalu besar !');
          </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    global $koneksidb;

    // $display = htmlspecialchars($data['display']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $bahan_dasar = htmlspecialchars($data['bahan_dasar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $display = upload();
    if (!$display) {
        return false;
    }

    $query = "INSERT INTO
              food
            VALUES
            ('', '$display', '$nama', '$harga', '$bahan_dasar', '$deskripsi');
  
  ";
    mysqli_query($koneksidb, $query);
    return mysqli_affected_rows($koneksidb);
}

function hapus($id)
{
    global $koneksidb;

    // menghapus gambar difolder img
    $food = query("SELECT * FROM food WHERE id = $id")[0];
    if ($food['display'] != 'np.jpg') {
        unlink('../assets/img/' . $food['display']);
    }

    mysqli_query($koneksidb, "DELETE FROM food WHERE id = $id") or die(mysqli_error($koneksidb));
    return mysqli_affected_rows($koneksidb);
}

function ubah($data)
{
    global $koneksidb;

    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $bahan_dasar = htmlspecialchars($data['bahan_dasar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $display = upload();
    if (!$display) {
        return false;
    }

    if ($display == 'np.jpg') {
        $display = $gambar_lama;
    }


    $query = "UPDATE
              food
            SET
            display = '$display',
						nama = '$nama',
            harga = '$harga'
						bahan_dasar = '$bahan_dasar',
						deskripsi = '$deskripsi',
						
						WHERE id = '$id'
						";

    mysqli_query($koneksidb, $query);
    return mysqli_affected_rows($koneksidb);
}

function registrasi($data)
{
    global $koneksidb;
    $username = strtolower(stripcslashes($data['username']));
    $password1 = mysqli_real_escape_string($koneksidb, $data['password1']);
    $password2 = mysqli_real_escape_string($koneksidb, $data['password2']);

    // jika username / pw kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
          alert('username / password tidak boleh kosong!');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
    alert('username sudah terdaftar');
    document.location.href = 'registrasi.php';
    </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
          alert('konfirmasi password tidak sesuai!');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
        alert('password terlalu pendek!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')";
    mysqli_query($koneksidb, $query) or die(mysqli_error($koneksidb));
    return mysqli_affected_rows($koneksidb);
}

function cari($keyword)
{

    $query = "SELECT * FROM food WHERE
                nama LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                bahan_dasar LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' ";

    return query($query);
}
