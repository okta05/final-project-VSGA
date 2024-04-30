<?php
    include "layouts/header.php";
?>
<div class="container mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pemmesan</th>
                <th>Paket</th>
                <th>Tanggal Pemesanan</th>
                <th>Durasi</th>
                <th>Jumlah Peserta</th>
                <th>Penginapan</th>
                <th>Transportasi</th>
                <th>Makanan</th>
                <th>Harga Paket</th>
                <th>Harga Layanan</th>
                <th>Jumlah Tagihan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Oktaviano</td>
                <td>1</td>
                <td>30-04-2004</td>
                <td>3 Hari</td>
                <td>1</td>
                <td>1.000.000</td>
                <td>1.200.000</td>
                <td>500.000</td>
                <td>1.000.000</td>
                <td>2.700.000</td>
                <td>3.700.000</td>
                <td>
                    <input type="submit" class="btn btn-sm btn-warning" value="Ubah">
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    include "layouts/footer.php"
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/c385c7ce61.js" crossorigin="anonymous"></script>
</body>

</html>