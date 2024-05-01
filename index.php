<?php
  include "layouts/header.php";
?>

<h1>
    <center> Daftar Paket </center>
</h1>

<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card">
                        <img src="assets/image/pm.jpg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Pulau Merah</h5>
                            <p class="card-text">
                                Pulau Merah merupakan tempat wisata yang berada di Dusun Pancer, Desa Sumberagung,
                                Kecamatan Pesanggaran, Kabupaten Banyuwangi, Jawa Timur
                            </p>
                            <a href="pendaftaran.php" class="btn btn-danger">daftar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="assets/image/djawatan.jpg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Djawatan</h5>
                            <p class="card-text">
                                Djawatan merupakan tempat wisata yang berada di Purwosari, Benculuk, Kec. Cluring,
                                Kabupaten Banyuwangi, Jawa Timur
                            </p>
                            <a href="pendaftaran.php" class="btn btn-danger">daftar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="assets/image/teluk-hijau.jpeg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Teluk Hijau</h5>
                            <p class="card-text">
                                Teluk HIjau merupakan tempat wisata yang berada di Dusun Krajan, Sarongan, Kec.
                                Pesanggaran, Kabupaten Banyuwangi, Jawa Timur
                            </p>
                            <a href="pendaftaran.php" class="btn btn-danger">daftar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="assets/image/telunjuk-raung.jpg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Telunjuk Raung</h5>
                            <p class="card-text">
                                Telunjuk Raung merupakan tempat wisata yang berada di Desa Sumberarum, Dusun Mangaran,
                                Songgon, Kabupaten Banyuwangi, Jawa Timur.
                            </p>
                            <a href="pendaftaran.php" class="btn btn-danger">daftar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php 
  include "layouts/sidebar.php";
?>

    </div>
</div>


<?php
  include "layouts/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/c385c7ce61.js" crossorigin="anonymous"></script>
</body>

</html>