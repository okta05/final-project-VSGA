<?php
  include "layouts/header.php";
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_wisata";
    $db = mysqli_connect($hostname, $username, $password, $database);


    $query ="SELECT * FROM pesanan_wisata";

    $hasil=$db->query($query);
?>

<div class="container mt-3">
    <div class="col-12">
        <h2><center>Daftar Pesanan<center></h2>
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Paket Wisata</th>
                    <th scope="col">Jumlah Peserta</th>
                    <th scope="col">tgl pesan</th>
                    <th scope="col">Jumlah Hari</th>
                    <th scope="col">Penginapan</th>
                    <th scope="col">Transportasi</th>
                    <th scope="col">Makanan</th>
                    <th scope="col">Total Tagihan</th>
                    <!-- <th scope="col">Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                if($hasil->num_rows>0){
                while($row = $hasil->fetch_assoc()) {
                  $count++;
                    echo "<tr>";
                    echo "<td>$count</th>";
                    echo "<td>". $row['nama_pemesan'] ."</td>";
                    echo "<td>". $row['paket_wisata'] ."</td>";
                    echo "<td>". $row['jumlah_peserta'] ."</td>";
                    echo "<td>".$row['tgl_pesan'] ."</td>";
                    echo "<td>". $row['durasi'] ."</td>";
                    echo "<td>". $row['penginapan'] ."</td>";
                    echo "<td>". $row['transportasi'] ."</td>";
                    echo "<td>". $row['makanan'] ."</td>";
                    echo "<td>". $row['jumlah_tagihan'] ."</td>";
                    // echo  "<td>"; 
                    // echo "<a href='modifikasi.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Ubah</a>";
                    // echo "<a href='hapus.php?id=" . $row['id'] . "' class='ms-3 btn btn-danger btn-sm' onclick='return confirm(\"Anda yakin akan hapus ?\")'>Hapus</a>";
                    // echo "</td>";
                    echo "</tr>";
                }
              }
                ?>
            </tbody>

        </table>

    </div>

</div>

<?php 
  include "layouts/footer.php";
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/c385c7ce61.js" crossorigin="anonymous"></script>