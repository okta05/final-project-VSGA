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
                        <label for="paket-wisata" class="form-label">Paket Wisata</label>
                        <select class="form-select" onchange="updateHargaPaket()" id="paket-wisata" name="paket-wisata"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                            <option value="4">Paket 4</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tgl-pesan" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control form-control-sm" id="tgl-pesan" name="tgl-pesan"
                            placeholder="" required>
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
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="jumlah-peserta" class="form-label">Jumlah Peserta</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" id="jumlah-peserta"
                                name="jumlah-peserta" placeholder="" aria-describedby="basic-addon2" required>
                            <hari class="input-group-text" id="basic-addon2">orang</span>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-lg-9">
                        <div>
                            <label>Pelayanan Paket Perjalanan</label>
                            <div class="d-lg-flex justify-content-lg-between">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="penginapan"
                                        name="penginapan" onclick="handlePenginapan(this)">
                                    <label class="form-check-label" for="penginapan"> Penginapan (Rp. 300.000)</label>
                                    </input>
                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="transportasi"
                                        name="transportasi" onclick="handleTransportasi(this)">
                                    <label class="form-check-label" for="transportasi"> Transportasi (Rp.
                                        1.200.000)</label>
                                    </input>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="makanan"
                                        name="makanan" onclick="handleMakanan(this)">
                                    <label class="form-check-label" for="makanan"> Makanan (Rp. 500.000)</label>
                                    </input>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-paket" class="form-label">Harga Paket</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="harga-paket" name="harga-paket"
                                placeholder="" required>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-layanan" class="form-label">Harga Layanan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="harga-layanan"
                                name="harga-layanan" placeholder="" required>
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


        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-tittle">Video 1</h5>
                    <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/xeFaACENF0s?si=xYRDDa_NDOnLu3Y9"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
penginapan = false;
transportasi = false;
makanan = false;

function updateHargaPaket() {
    nilai = Number(document.getElementById("paket-wisata").value); //.value digunakan untuk mengambil nilai
    elemenHargaPaket = (document.getElementById("harga-paket"));
    harga = 0;

    if (nilai == 1) {
        harga = 500000;
    } else if (nilai == 2) {
        harga = 750000;
    } else if (nilai == 3) {
        harga = 1000000;
    } else if (nilai == 4) {
        harga = 1250000;
    }
    // console.log(nilai);
    //  alert(harga);
    elemenHargaPaket.value = harga;
    return harga;
}

function handlePenginapan(cb) {
    penginapan = cb.checked;
    //alert("handle inap");
    hl = document.getElementById("harga-layanan");
    hl.value = hitungLayanan();
}

function handleTransportasi(cb) {
    transportasi = cb.checked;
    //alert("handle trans")
    hl = document.getElementById("harga-layanan");
    hl.value = hitungLayanan();
}

function handleMakanan(cb) {
    makanan = cb.checked;
    hl = document.getElementById("harga-layanan");
    hl.value = hitungLayanan();
}


function hitungLayanan() {
    totalLayanan = 0;

    if (penginapan) {
        totalLayanan = totalLayanan + 300000;
    }
    if (transportasi) {
        totalLayanan = totalLayanan + 200000;
    }
    if (makanan) {
        totalLayanan = totalLayanan + 150000;
    }

    //alert(totalLayanan);
    return totalLayanan;
}

function hitung() {
    jumlah = 0;
    peserta = Number(document.getElementById("jumlah-peserta").value);
    tagihan = document.getElementById("jumlah-tagihan");
    durasi = Number(document.getElementById("durasi").value);
    biayaPaket = Number(document.getElementById("harga-paket").value);
    jumlah = (biayaPaket * peserta) + ((hitungLayanan() * peserta * durasi));
    tagihan.value = jumlah;

    // let namaPaket = document.getElementById("nama-paket").value;
    // let durasi = Number(document.getElementById("durasi").value); // Mengambil nilai durasi
    // let jumlahPeserta = Number(document.getElementById("jumlah-peserta").value); // Mengambil nilai jumlah peserta

    // if (namaPaket === "Pilih Paket") {
    //     alert("Paket Wisata harus dipilih!");
    //     return;
    // }

    // if (isNaN(durasi) || durasi <= 0) {
    //     alert("Durasi harus diisi dengan angka lebih dari 0!");
    //     return;
    // }

    // if (isNaN(jumlahPeserta) || jumlahPeserta <= 0) {
    //     alert("Jumlah Peserta harus diisi dengan angka lebih dari 0!");
    //     return;
    // }

    // let hargaPaket = updateHargaPaket(); //mengambil nilai harga paket
    // let biayaLayanan = hitungLayanan();
    // let totalTagihan = hargaPaket + (biayaLayanan * durasi * jumlahPeserta);
    // document.getElementById('jumlah-tagihan').value = totalTagihan;

}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/c385c7ce61.js" crossorigin="anonymous"></script>