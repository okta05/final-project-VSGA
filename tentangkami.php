<?php
   include("lib/file_util.php");
    include("layouts/header.php");
?>


    <div class="container text-center mt-5">
        <h3>Tentang Kami</h3>
        <hr class="mx-auto">
        <!-- <img src="assets/imgs/sejarah.png" style="width: 100%;"/> -->
        <iframe width=80% height="350" src="https://www.youtube.com/embed/zzJcADNiNhg?si=-bQ5C_ApoWWEuuWd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <p style="text-align: justify">
            <?php
            $fileObject = new FileUtil("sejarah.txt");
            $str_data = $fileObject->readTxtFile();
            echo $str_data;
            ?>
        </p>
    </div>

<?php
include("layouts/footer.php");
?>

</div>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/app.js"></script>
</body>
</html>

