<?php
    include "layouts/header.php";
    // Menghubungkan ke database
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

    // Mendapatkan data dari database
    $sql = "SELECT * FROM pesanan_wisata";
    $result = $conn->query($sql);

    // Menampilkan data dalam tabel
    echo '<div class="container mt-3">';
    echo '<table class="table table-bordered">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nama Pemesan</th>';
    echo '<th>Paket</th>';
    echo '<th>Tanggal Pemesanan</th>';
    echo '<th>Durasi</th>';
    echo '<th>Jumlah Peserta</th>';
    echo '<th>Penginapan</th>';
    echo '<th>Transportasi</th>';
    echo '<th>Makanan</th>';
    echo '<th>Harga Paket</th>';
    echo '<th>Harga Layanan</th>';
    echo '<th>Jumlah Tagihan</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["nama_pemesan"] . '</td>';
            echo '<td>' . $row["paket_wisata"] . '</td>';
            echo '<td>' . $row["tgl_pesan"] . '</td>';
            echo '<td>' . $row["durasi"] . ' Hari</td>';
            echo '<td>' . $row["jumlah_peserta"] . ' Orang</td>';
            echo '<td>' . ($row["penginapan"] == 'Y' ? 'Ya' : 'Tidak') . '</td>';
            echo '<td>' . ($row["transportasi"] == 'Y' ? 'Ya' : 'Tidak') . '</td>';
            echo '<td>' . ($row["makanan"] == 'Y' ? 'Ya' : 'Tidak') . '</td>';
            echo '<td>Rp ' . number_format($row["harga_paket"], 2) . '</td>';
            echo '<td>Rp ' . number_format($row["harga_layanan"], 2) . '</td>';
            echo '<td>Rp ' . number_format($row["jumlah_tagihan"], 2) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="11">Tidak ada data</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    $conn->close();
    include "layouts/footer.php";
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/c385c7ce61.js" crossorigin="anonymous"></script>
</body>

</html>