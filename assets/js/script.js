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

}