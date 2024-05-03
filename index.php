<?php
  include "layouts/header.php";
?>

<h1>
    <center> Daftar Kamar </center>
</h1>

<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card">
                        <img src="assets/image/standar.jpeg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Standart</h5>
                            <p class="card-text">
                                kamar ini merupakan kamar standar
                            </p>
                            <a href="pendaftaran.php" class="btn btn-danger">daftar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="assets/image/deluxe.jpg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Deluxe</h5>
                            <p class="card-text">
                                kamar ini merupakan kamar deluxe
                            </p>
                            <a href="pendaftaran.php" class="btn btn-danger">daftar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="assets/image/family.jpeg" class="card-img-top same-size-image">
                        <div class="card-body">
                            <h5 class="card-tittle">Family</h5>
                            <p class="card-text">
                                Kamar ini merupakan kamar family
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