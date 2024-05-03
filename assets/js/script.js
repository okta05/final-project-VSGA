penginapan = false;
transportasi = false;
makanan = false;

function updateHargaKamar() {
    nilai = document.getElementById("tipe-kamar").value; //.value digunakan untuk mengambil nilai
    elemenHargaKamar = (document.getElementById("harga-kamar"));

    harga = nilai;

    if (nilai == 'standar') {
        harga = 600000;
    } else if (nilai == 'deluxe') {
        harga = 800000;
    } else if (nilai == 'family') {
        harga = 1000000;
    }

    elemenHargaKamar.value = harga;

}

function handleBreakfast(cb) {
    breakfast = cb.checked;
    //alert("handle inap");
    hl = document.getElementById("harga-layanan");
    if (breakfast) {
       hl.value = hitungLayanan();
    } else {
        hl.value = 0;
    }

}


function hitungLayanan() {
    totalLayanan = 0;

    if (breakfast) {
        totalLayanan = totalLayanan + 80000;
    }

    //alert(totalLayanan);
    return totalLayanan;
}

function hitung() {
    jumlah = 0;
    total = 0;
    tagihan = document.getElementById("jumlah-tagihan");
    durasi = Number(document.getElementById("durasi").value);
    biayaKamar = Number(document.getElementById("harga-kamar").value);
    totalLayanan = Number(document.getElementById("harga-layanan").value);
    jumlah = biayaKamar * durasi;


    if (durasi > 3) {
            diskon = jumlah * 0.1;
        jumlah -= diskon;
    }

    total = jumlah + (totalLayanan * durasi);
    tagihan.value = total;
    
}

    document.addEventListener("DOMContentLoaded", function () {
        var noIdentitasInput = document.getElementById("no-identitas");
        noIdentitasInput.addEventListener("change", function () {
            var identitasValue = this.value.trim();
            if (identitasValue.length < 16) {
                alert("Nomor identitas harus memiliki minimal 16 karakter.");
                // Kosongkan nilai input
                this.value = "";
            }
        });
    });
