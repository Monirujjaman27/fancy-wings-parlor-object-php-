<?php include "inc/header.php"; ?>
<?php include "inc/slider.php"; ?>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="container">

            <!-- Shop
            ============================================= -->
            <div id="shop" class="shop row gutter-30 col-mb-30 mt-3">

                <!-- Product 1 -->

                <?php
                $getcat = $services_class->show();
                $i = 0;
                if ($getcat) {
                    while ($result = $getcat->fetch_assoc()) {
                        $i++;
                ?>
                        <div class="product col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="demo-furniture-single.html"><img class="p-image" src="Admin/<?=$result['image']; ?>" alt="<?= ucwords($result['image']); ?>"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-light me-2"><i class="icon-line-shopping-cart"></i></a>
                                            <a href="assets/ajax/quick-view.html" class="btn btn-light" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title mb-0">
                                        <h4 class="mb-0"><a class="fw-medium" href="demo-furniture-single.html"><?= ucwords($result['name']); ?> </a></h4>
                                        <h5 class="product-price fw-normal">৳ <?= ucwords($result['price']); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>


            </div><!-- #shop end -->


        </div>

    </div>
</section><!-- #content end -->

<?php include "inc/footer.php"; ?>