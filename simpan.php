<?php
  include "layouts/header.php";
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_hotel";
    $dbConn = mysqli_connect($hostname, $username, $password, $database);

    $nama_pemesan = $_POST['nama-pemesan'];
    $no_identitas = $_POST['no-identitas'];
    $tipe_kamar = $_POST['tipe-kamar'];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tgl_pesan = $_POST['tgl-pesan'];
    $durasi = $_POST['durasi'];
    $breakfast = isset($_POST['breakfast']) ? 'Y' : 'N';
    $harga_layanan = $_POST['harga-layanan'];
    $harga_kamar = $_POST['harga-kamar'];
    $jumlah_tagihan = $_POST['jumlah-tagihan'];

    $query = "INSERT INTO pesanan_hotel (nama_pemesan, no_identitas, tipe_kamar, jenis_kelamin, tgl_pesan, durasi, breakfast, harga_layanan, harga_kamar, jumlah_tagihan)
    VALUES ('$nama_pemesan', '$no_identitas', '$tipe_kamar', '$jenis_kelamin', '$tgl_pesan', '$durasi', '$breakfast', '$harga_layanan', '$harga_kamar', '$jumlah_tagihan')";
    
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
                            <td>Nama Pemesan : </td>
                            <td><?php echo $nama_pemesan; ?></td>
                        </tr>
                        <tr>
                            <td>No Identitas : </td>
                            <td><?php echo $no_identitas; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : </td>
                            <td><?php echo $jenis_kelamin; ?></td>
                        </tr>
                        <tr>
                            <td>Tipe Kamar : </td>
                            <td><?php echo $tipe_kamar; ?></td>
                        </tr>
                        <tr>
                            <td>durasi : </td>
                            <td><?php echo $durasi; ?> hari</td>
                        </tr>
                        <tr>
                            <td>Layanan Makanan : </td>
                            <?php
                                $harga_layanan="";

                                if($breakfast=="Y"){
                                    $harga_layanan=$harga_layanan."breakfast ";
                                } else {
                                    $harga_layanan=$harga_layanan."tidak memesan layanan makanan ";
                                }

                            ?>
                            <td><?php echo $harga_layanan ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Tagihan : </td>
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