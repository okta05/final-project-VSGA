penginapan = false;
transportasi = false;
makanan = false;

function updateHargaPaket() {
    nilai = Number(document.getElementById("paket-wisata").value);
    elementHargaPaket = document.getElementById("harga-paket");
    paketwisata = 0;

    if (nilai == 1) {
        paketwisata = 500000;
    } else if (nilai == 2) {
        paketwisata = 750000;
    } else if (nilai == 3) {
        paketwisata = 10000000;
    } else if (nilai == 4) {
        paketwisata = 12500000;
    }
    // console.log(nilai); cek pakek console
    // alert(paketwisata);
    elementHargaPaket.value = paketwisata;
    // document.getElementById("harga-paket").value=paketwisata;s
}

function handlePenginapanan(cb) {
    penginapan = cb.checked;
    hl = document.getElementById("harga-layanan");
    hl.value = hitungLayanan();
    // ul.value = updateJumlahPaket();
}

function handleTransportasi(cb) {
    transportasi = cb.checked;
    hl = document.getElementById("harga-layanan");
    hl.value = hitungLayanan();
    // ul.value = updateJumlahPaket();
}

function handleMakanan(cb) {
    makanan = cb.checked;
    hl = document.getElementById("harga-layanan");
    hl.value = hitungLayanan();
    // ul.value = updateJumlahPaket();
}

function hitungLayanan() {
    totalLayanan = 0;

    if (penginapan) {
        totalLayanan = totalLayanan + 300000 ;
    }
    if (transportasi) {
        totalLayanan = totalLayanan + 200000;
    }
    if (makanan) {
        totalLayanan = totalLayanan + 150000;
    }
    return totalLayanan;
}

function updateJumlahPeserta() {
    peserta = document.getElementById("jumlah-peserta").value;
    hargaPaket = Number(document.getElementById("paket-wisata").value);
    elementJumlahPaket = document.getElementById("harga-paket");
    elementJumlahLayanan = document.getElementById("harga-layanan")
    
    updatePaket = 0;

    updatePaket = (peserta * paketwisata);
    updateLayanan = (durasi * totalLayanan * peserta)

    elementJumlahPaket.value = updatePaket;
    elementJumlahLayanan.value = updateLayanan;
}

function updateJumlahDurasi() {
    durasi = document.getElementById("durasi").value;
    hargaPaket = Number(document.getElementById("paket-wisata").value);
    elementJumlahPaket = document.getElementById("harga-paket");
    elementJumlahLayanan = document.getElementById("harga-layanan")
    
    updatelayanan = 0;
    // updatePaket = (peserta * paketwisata);
    updateLayanan = (durasi * totalLayanan * peserta)

    elementJumlahPaket.value = updatePaket;
    elementJumlahLayanan.value = updateLayanan;
}

function hitung() {
    elementJumlahTagihan = document.getElementById("jumlah-tagihan");

    totalTagihan = 0;
    // Hitung total tagihan baru
    totalTagihan = (updateLayanan + updatePaket);


    elementJumlahTagihan.value = totalTagihan;
}