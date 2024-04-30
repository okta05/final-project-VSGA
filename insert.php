<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "db_wisata"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$nama_pemesan = $_POST['nama-pemesan'];
$paket_wisata = $_POST['paket-wisata'];
$tgl_pesan = $_POST['tgl-pesan'];
$durasi = $_POST['durasi'];
$jumlah_peserta = $_POST['jumlah-peserta'];
$penginapan = isset($_POST['penginapan']) ? $_POST['penginapan'] : 'N';
$transportasi = isset($_POST['transportasi']) ? $_POST['transportasi'] : 'N';
$makanan = isset($_POST['makanan']) ? $_POST['makanan'] : 'N';
$harga_paket = $_POST['harga-paket'];
$harga_layanan = $_POST['harga-layanan'];
$jumlah_tagihan = $_POST['jumlah-tagihan'];

// Menyimpan data ke database
$sql = "INSERT INTO pesanan_wisata (nama_pemesan, paket_wisata, tgl_pesan, durasi, jumlah_peserta, penginapan, transportasi, makanan, harga_paket, harga_layanan, jumlah_tagihan)
        VALUES ('$nama_pemesan', '$paket_wisata', '$tgl_pesan', '$durasi', '$jumlah_peserta', '$penginapan', '$transportasi', '$makanan', '$harga_paket', '$harga_layanan', '$jumlah_tagihan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
