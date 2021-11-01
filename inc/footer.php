<footer class="bg-dark footer">
    <div class="container pt-5 pb-2">
        <?php
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
        ?>
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <h2 class="pl-3 my-3 foot-title text-white">
                            Fancy<span class="foot-span">wings</span>
                        </h2>
                        <li class="d-flex align-items-ceter text-white"><i class="bx bxs-message pr-3 pr-lg-4"></i>
                            <p><a href="mailto:<?= $item['email'] ?>"><?= $item['email'] ?></a></p>

                        </li>
                        <li class="d-flex align-items-ceter text-white"><i class="bx bxs-phone-call pr-3 pr-lg-4"></i>
                            <p><a class="" href="tel:+<?= $item['phone'] ?>"><?= $item['phone'] ?></a></p>
                        </li>
                    </div>
                    <div class="col-md-3 pl-3 mt-5 text-center text-white">
                        <p>Get in Touch with us!</p>
                        <ul class="d-flex justify-content-center mt-5 media">
                            <a href="<?= $item['instagram'] ?>"><i class="bx bxl-instagram-alt"></i></a>
                            <a href="<?= $item['fb'] ?>"><i class="bx bxl-facebook-circle"></i></a>
                            <a href="<?= $item['twitter'] ?>"><i class="bx bxl-twitter"></i></a>
                            <a href="<?= $item['youtube'] ?>"><i class="bx bxl-youtube"></i></a>
                        </ul>
                    </div>
                    <div class="col-md-3 pl-3 mt-4">
                        <ul class="foot-nav border-left px-3 text-white">
                            <li><a class="m-0" href="#home">Home</a></li>
                            <li class="mt-2"><a class="m-0" href="#">Best Makeup</a></li>
                            <li class="mt-2"><a class="m-0" href="#u_team">Artist</a></li>
                            <li class="mt-2"><a class="m-0" href="#">Blog</a></li>
                            <li class="mt-2"><a class="m-0" href="#contact">Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <p class="text-center pt-5 copy-right text-white"><?= $item['copyright'] ?></p>
        <?php }
        } ?>
    </div>
</footer>
<!-- script links -->
<script src="assets/assets/js/jquery.js"></script>
<script src="assets/assets/js/bootstrap.min.js"></script>
<!-- Scroll reveal cdn -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- external script -->
<script src="/assets/js/script.js"></script>
</body>

</html>