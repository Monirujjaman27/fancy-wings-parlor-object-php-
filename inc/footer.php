<!-- Footer
		============================================= -->
<footer id="footer" class="dark" style="background: url('assets/images/footer-bg.jpg') repeat; background-size: cover;" data-scrollto-settings="{&quot;offset&quot;:140,&quot;speed&quot;:1250,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
    <div class="container">
        <!-- Footer Widgets
				============================================= -->
        <div class="footer-widgets-wrap">
            <div class="row col-mb-50">
                <div class="col-md-8">
                    <div class="widget clearfix">
                        <div class="row col-mb-30">
                            <div class="col-6 col-lg-6 widget_links">
                                <img src="<?= $default_settings_items['logo'] ?>" alt="Image" style="margin-top: 8px; padding-right: 18px;" width="150px">
                                <p class="about_conternt-text"><?= $default_settings_items['about'] ?></p>
                            </div>
                            <div class="col-6 col-lg-6 widget_links">
                                <div class="row">
                                    <div class="col-6 m-auto">
                                        <h4>Quick Links</h4>
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="gallerie.php">Galleries</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <?php
                        $services = new Subscribers();
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $email = $_POST['email'];
                            if (empty($email)) {
                                echo "<span class='text-danger'>Enter Your Email  </span>";
                            } else {
                                echo $services->add($_POST);
                            }
                        }
                        ?>

                        <form action="" method="post" class="mb-0">
                            <div class="input-group mx-auto">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                                <input class="btn btn-success" type="submit" />
                            </div>
                        </form>
                    </div>

                    <div class="widget">
                        <div class="row col-mb-30">
                            <div class="col-sm-6 col-md-12 col-lg-6 clearfix">
                                <a href="<?= $default_settings_items['fb_page'] ?>" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="<?= $default_settings_items['fb_page'] ?>"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .footer-widgets-wrap end -->
    </div>
    <div class="container copyright_container-area">
        <div class="row justify-content-between col-mb-30">
            <div class="col-12 col-lg-auto text-center text-lg-start">
                <?= $default_settings_items['copyright'] ?>
            </div>

            <div class="col-12 col-lg-auto text-center text-lg-end">
                <a href="<?= $default_settings_items['fb'] ?>" class="social-icon inline-block si-small si-borderless mb-0 si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="<?= $default_settings_items['twitter'] ?>" class="social-icon inline-block si-small si-borderless mb-0 si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

                <a href="<?= $default_settings_items['google'] ?>" class="social-icon inline-block si-small si-borderless mb-0 si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>

                <a href="<?= $default_settings_items['linkedin'] ?>" class="social-icon inline-block si-small si-borderless mb-0 si-linkedin">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                </a>
            </div>
        </div>
    </div>

    <style>
        .copyright_container-area {
            border-top: 1px solid #666;
            padding-top: 18px
        }

        .about_conternt-text {
            font-size: 14px;
            /* font-family: 'Zilla Slab', serif !important; */
            text-align: justify;
        }
    </style>
</footer>
<!-- #footer end -->

</div><!-- #wrapper end -->


<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="bg-color op-07 h-op-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
        <rect width="256" height="256" fill="none"></rect>
        <polygon points="48 208 128 128 208 208 48 208" opacity="0.2"></polygon>
        <polygon points="48 208 128 128 208 208 48 208" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polygon>
        <polyline points="48 128 128 48 208 128" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
    </svg>
</div>

<!-- JavaScripts
	============================================= -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/plugins.min.js"></script>

<!-- Footer Scripts
	============================================= -->
<script src="assets/js/functions.js"></script>

</body>

</html>