<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">

                <?php
                $getcat = $Slider_class->show();
                $i = 0;
                if ($getcat) {
                    while ($result = $getcat->fetch_assoc()) {
                        $i++;
                ?>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp"><?= $result['heading']; ?>
                                        <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?= $result['subheading']; ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('Admin/<?= $result['image']; ?>');"></div>
                        </div>
                <?php }
                } ?>

            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

        <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

    </div>
</section>