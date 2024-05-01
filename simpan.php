<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_wisata";
    $db = mysqli_connect($hostname, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "koneksi gagal".mysqli_connect_error();
    } else {
        echo "koneksi berhasil";
    }

    $nama_pemesan = $_POST['nama-pemesan'];
    $paket_wisata = $_POST['paket-wisata'];
    $tgl_pesan = $_POST['tgl-pesan'];
    $durasi = $_POST['durasi'];
    $jumlah_peserta = $_POST['jumlah-peserta'];
    $penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
    $transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
    $makanan = isset($_POST['makanan']) ? 'Y' : 'N';
    $jumlah_tagihan = $_POST['jumlah-tagihan'];

    $query = "INSERT INTO pesanan_wisata (nama_pemesan, paket_wisata, tgl_pesan, durasi, jumlah_peserta, penginapan, transportasi, makanan, jumlah_tagihan)
    VALUES ('$nama_pemesan', '$paket_wisata', '$tgl_pesan', '$durasi', '$jumlah_peserta', '$penginapan', '$transportasi', '$makanan', '$jumlah_tagihan')";

    $sukses = mysqli_query($db, $query);
?>