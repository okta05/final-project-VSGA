<?php
  include "layouts/header.php";
?>


<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h2>Form Pemesanan Paket Wisata</h2>
            <form action="simpan.php" method="post" autocomplate="off">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-control-sm" id="nama-pemesan" name="nama-pemesan"
                            placeholder="" required>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <label for="no-identitas" class="form-label">No Identitas</label>
                        <input type="number" class="form-control form-control-sm" id="no-identitas" name="no-identitas"
                            placeholder="" required>
                    </div>

                    <div class="mb3 col-12 col-lg-5">
                        <label for="inputJenisKelamin" class="form-label" id="jenis_kelamin">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkLaki"
                                value="Laki-laki" required>
                            <label class="form-check-label" for="jkLaki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkPerempuan"
                                value="Perempuan" required>
                            <label class="form-check-label" for="jkPerempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="tipe-kamar" class="form-label">Tipe Kamar</label>
                            <select class="form-select" onchange="updateHargaKamar()" id="tipe-kamar" name="tipe-kamar"
                                aria-label="Default select example">
                                <option selected disabled> Pilih Tipe Kamar</option>
                                <option value="standar">Standar</option>
                                <option value="deluxe">Deluxe</option>
                                <option value="family">Family</option>
                            </select>
                        </div>

                        <div class="mb-3 col-12 col-md-6">
                            <label for="harga-kamar" class="form-label">Harga Kamar</label>
                            <div class="input-group input-group-sm">
                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                <input type="text" class="form-control form-control-sm" id="harga-kamar"
                                    name="harga-kamar" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tgl-pesan" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="tgl-pesan" name="tgl-pesan" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="durasi" class="form-label">Durasi</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" id="durasi" name="durasi"
                                placeholder="" aria-describeby="basic-addon2" required>
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-lg-9">
                        <div>
                            <label>Pelayanan Makanan</label>
                            <div class="d-lg-flex justify-content-lg-between">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="breakfast"
                                        name="breakfast" onclick="handleBreakfast(this)">
                                    <label class="form-check-label" for="breakfast"> Breakfast</label>
                                    </input>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-layanan" class="form-label">Harga Layanan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="harga-layanan"
                                name="harga-layanan" placeholder="">
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-4">
                        <label for="jumlah-tagihan" class="form-label">Jumlah Tagihan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="jumlah-tagihan"
                                name="jumlah-tagihan" placeholder="" required>
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
            </form>
        </div>


        <?php 
        include "layouts/sidebar.php";
        ?>
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