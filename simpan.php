<?php
  include "layouts/header.php";
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_wisata";
    $dbConn = mysqli_connect($hostname, $username, $password, $database);

    $nama_pemesan = $_POST['nama-pemesan'];
    $paket_wisata = $_POST['paket-wisata'];
    $tgl_pesan = $_POST['tgl-pesan'];
    $durasi = $_POST['durasi'];
    $jumlah_peserta = $_POST['jumlah-peserta'];
    $penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
    $transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
    $makanan = isset($_POST['makanan']) ? 'Y' : 'N';
    $harga_layanan = $_POST['harga-layanan'];
    $harga_paket = $_POST['harga-paket'];
    $jumlah_tagihan = $_POST['jumlah-tagihan'];

    $query = "INSERT INTO pesanan_wisata (nama_pemesan, paket_wisata, tgl_pesan, durasi, jumlah_peserta, penginapan, transportasi, makanan, harga_paket, harga_layanan, jumlah_tagihan)
    VALUES ('$nama_pemesan', '$paket_wisata', '$tgl_pesan', '$durasi', '$jumlah_peserta', '$penginapan', '$transportasi', '$makanan', '$harga_paket', '$harga_layanan', '$jumlah_tagihan')";

    $hasil = mysqli_query($dbConn, $query);
?>

<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Pesanan anda berhasil ditambahkan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <div class="card">
                <div class="card-header" style="text-align: center">
                    RANGKUMAN RESERVASI PAKET WISATA
                </div>
                <div class="card-body">
                    <table style="width: 50%">
                        <tr>
                            <td>nama</td>
                            <td><?php echo $nama_pemesan; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Peserta</td>
                            <td><?php echo $jumlah_peserta; ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Perjalanan : </td>
                            <td><?php echo $durasi; ?></td>
                        </tr>
                        <tr>
                            <td>Layanan Paket</td>
                            <?php
                                $harga_layanan="";

                                if($penginapan=="Y"){
                                    $harga_layanan=$harga_layanan."Penginapan ";
                                }
                                if($transportasi=="Y"){
                                    $harga_layanan=$harga_layanan."Transportasi ";
                                }
                                if($makanan=="Y"){
                                    $harga_layanan=$harga_layanan."Makanan ";
                                }

                            ?>
                            <td><?php echo $harga_layanan ?></td>
                        </tr>
                        <tr>
                            <td>Harga Paket</td>
                            <td><?php echo $harga_paket; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Tagihan</td>
                            <td><?php echo $jumlah_tagihan; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

        <?php 
        include "layouts/sidebar.php";
        ?>
    </div>
</div>
<div class="container mt-3">
    <div class="card" style="text-align: center">
        <div class="card-body">
            <span>Pesan Lagi ?</span>
            <br>
            <row>
                <a href="pendaftaran.php" class="btn btn-primary" style="width: 20%">Ya</a>
                <a href="index.php" class="btn btn-danger" style="width: 20%">Tidak</a>
            </row>
        </div>
    </div>
</div>

<?php 
  include "layouts/footer.php";
?>

<script src="assets/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/c385c7ce61.js" crossorigin="anonymous"></script>