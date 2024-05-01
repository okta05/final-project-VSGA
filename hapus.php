<?php
  include "layouts/header.php";
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_wisata";
    $dbConn = mysqli_connect($hostname, $username, $password, $database);


    // menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$query = "DELETE FROM pesanan_wisata WHERE id = '$id'";
$result = mysqli_query($dbConn, $query);

if ($result) {
    // mengalihkan halaman kembali ke daftar_pesanan.php jika penghapusan berhasil
    header("Location: daftar_pesanan.php");
    exit();
} else {
    // menampilkan pesan kesalahan jika terjadi masalah dalam penghapusan data
    echo "Terjadi masalah dalam penghapusan data.";
}

    
?>