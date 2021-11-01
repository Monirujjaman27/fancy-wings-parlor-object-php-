<?php include "inc/header.php"; ?>
<?php include './classes/Service.php'; ?>
<?php include './classes/contactMessage.php'; ?>
<?php
$service = new Service();
$contactmessage = new ContactMessage();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $res = $contactmessage->contact($_POST, $_FILES);
}
?>
<!-- About -->
<section id="about">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-9 col-sm-7 col-md-5 col-lg-4 col-xl-3 gallary-pic-1">
                <!-- About image -->
            </div>
            <div class="ml-md-5 col-10 col-sm-10 col-md-6 col-lg-7 col-xl-8 detail">
                <h1 class="sub-title text-center text-body my-4 my-md-0">Why us</h1>
                <p>
                    The Fancy wings is the brand new women's beauty parlour located at dhaka.We provided all type of makeup for womens and we provide body massage based on customer needs, we get successful servey about our work on bridal, evening and basic makeup.
                </p>
                <p>
                    We offer you with 10% of discount in any of makeup or body massage if your visit fancy wings for the first time.
                </p>
                <button class="btn btn-primary visit px-5 py-2">Visit</button>
            </div>
        </div>
        <!--images-->
        <div class="row mt-5 justify-content-sm-center justify-content-lg-start galleryone">
            <div class="ml-xl-4 mx-auto mx-sm-5 mr-lg-5 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-grow-shadow">
                <!--first img-->
            </div>
            <div class="ml-xl-0 mx-auto ml-lg-5 col-9 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-grow-shadow">
                <!--second img-->
            </div>
        </div>
        <div class="row justify-content-sm-ceter gallerysecond">
            <div class="ml-xl-4 ml-sm-2 mx-auto mx-sm-5 col-9 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-grow-shadow">
                <!--third image-->
            </div>
            <div class="ml-xl-0 ml-sm-2 mx-auto mx-sm-5 col-9 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-grow-shadow">
                <!--fourth image-->
            </div>
            <div class="ml-xl-0 ml-sm-2 mx-auto mx-sm-auto col-9 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-grow-shadow">
                <!--fifth image-->
            </div>
            <div class="col-12 goal">
                <p>
                    Our goal is to ensure the customer requirement and we are professionally trained artist we take care our clients and fulfill there needs and our work will make you feel comfort.Sed porttitor lectus nibh.Nulla porttitor accumsan tincidunt.Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                </p>
                <p>
                    Curabitur aliquet quam id dui posuere blandit.Praesent sapien massa,convallis a pallentesque nec, egestas non nisi.Donec sollicitudin molestie malesuada.Praesent sapien massa,convallis a pellentesque nec,egestas non nisi.Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </div>
    </div>
</section>
<!--Features-->
<section id="feature">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-7 col-md-5 col-lg-4 col xl-3 gallery-pic-2">
                <!--feature image-->
            </div>
            <div class="ml-md-5 col-10 col-sm-10 col-md-6 col-lg-7 col-xl-8 detail">
                <h1 class="sub-title text-center text-body my-4 my-md-0">Features</h1>
                <p>
                    Nulla quis lorem ut libero malesuada feugiat.Curabitur aliquet quam id dui posuere blandit.Proin eget tortor risus.Cras ultricies ligula sed magna dictum porta.Curabitur arcu erat,accumsan id imperdiet et,porttitor at sem.
                </p>
                <p>
                    Cras ultricies ligula sed magna dictum porta.Sed porttitor lectus nibh.Cras ultricies ligula sed magna dictu porta.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <p>
                    Donec sollicitudin molestic malasuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                </p>
            </div>
        </div>
        <div id="u_team" class="container py-4 my-5 justify-content-center text-center border rounded">
            <h1 class="sub-title">Meat the team</h1>
            <blockquote class="blockquote py-3">
                <p>
                    "Be the reason someone smiles.Be the reason someone feels loved and believs in the goodness in people."
                </p>
                <footer class="blockquote-footer">Roy T Bennett</footer>
            </blockquote>
            <div class="row justify-content-center galleryThird py-3">
                <div class="mx-4 col-10 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-bob">
                    <!--first image-->
                </div>
                <div class="mx-4 col-10 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-bob">
                    <!--second image-->
                </div>
                <div class="mx-4 col-10 col-sm-4 col-md-5 col-lg-3 jumbotron hvr-bob">
                    <!--Third image-->
                </div>
            </div>
            <p>
                We curabitur arcu erat,accumsan id imperdiet et,Porttitor at sem.Mauris blandit aliquet elit.Eget tincidunt nibh pulvinara.Curabitur aliquet quam id dui posuere blandit.Praesent sapien massa,convallis a pellentesque nec,egestas nonnisi.Vivamus magna justo,lacinia eget consectetur sed,convallis at tellus.Sed porttitor lectus nibh.
            </p>
        </div>
    </div>
    </div>
</section>
<!--Services-->
<div id="services">
    <div class="container">
        <h1 class="sub-title">Services</h1>
        <div class=" py-4 row">
            <?php
            $getItem = $service->show();
            if ($getItem) {
                while ($result = $getItem->fetch_assoc()) {
            ?>
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class=" card text-center pt-3 d-flex align-items-center hvr-shadow">
                            <img src="Admin/upload/<?= $result['image']; ?>" class="img-fluid" height="130px" width="130px">
                            <div class="card-body">
                                <h4 class="card-title"><?= $result['name']; ?></h4>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
        <p>
            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Nulla porttitor accumsan tincidunt.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia care;Donec velit neque,auctor sit amet aliquam vel,ullamcorper sit amet ligula.
        </p>
        <h1 class="sub-title text-center my-4 my-md-0">Make Beauty</h1>
        <div class="card-deck my-4 py-4">
            <div class="mx-auto mx-md-3 card bridal col-9 col-sm-4 col-md-5 col-lg-3 hvr-shrink">
                <!--First image-->
            </div>
            <div class="mx-auto mx-md-3 card face col-9 col-sm-4 col-md-5 col-lg-3 hvr-shrink">
                <!--Second image-->
            </div>
            <div class="mx-auto mx-md-3 card Hair-style col-9 col-sm-4 col-md-5 col-lg-3 hvr-shrink">
                <!--Third image-->
            </div>
            <div class="mx-auto mx-md-3 card body-massage col-9 col-sm-4 col-md-5 col-lg-3 hvr-shrink">
                <!--Fourth image-->
            </div>
        </div>
        <p class="border-left pl-4">
            Praesent sapien massa,convallis a pallentesque nec,egestas non nisi.Nulla porttitor accumsan tincidunt.Lorem ipsum dolor sit amet,consectur adipiscing elit.Quisque velit nisi,pretium utlacinia in,elementum id enim.Vestibulum ac diam sit amet quam vahicula elementum sed sit amet dui.Proin eget tortor risus.Curabitur aliquet quam id dui posuere blandit.Quisque velit nisi,pretium ut lacinia in,elementu id enim.
        </p>
        <h1 class="sub-title py-5">Make an Appointment</h1>
        <div class="row justify-content-around">
            <div class="col-lg-5">
                <div class="row justify-content-center my-4 small-services">
                    <img src="https://img.freepik.com/free-photo/attractive-young-woman-beauty-salon_197531-1288.jpg?size=626&ext=jpg&ga=GA1.2.1151995299.1610236800" class="border rounded" width="100px" height="100px">
                    <div class="px-md-5 px-2 my-auto border border-left-0">
                        <h3>Make up</h3>
                        <p>Foundation,Lipgloss</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row justify-content-center my-4 small-services">
                    <img src="https://cdn.shopify.com/s/files/1/2028/2057/files/Classic-Facial.jpg?v=1584523707" class="border rounded" width="100px" height="100px">
                    <div class="px-md-5 px-2 my-auto border border-left-0">
                        <h3>Facial</h3>
                        <p>Facial mask,Facial scrub</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row justify-content-center my-4 small-services">
                    <img src="https://content3.jdmagicbox.com/comp/def_content/default-ladies-beauty-parlours/default-ladies-beauty-parlours-6.jpg" class="border rounded" width="100px" height="100px">
                    <div class="px-md-5 px-2 my-auto border border-left-0">
                        <h3>Hair style</h3>
                        <p>Straightning,Courls</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row justify-content-center my-4 small-services">
                    <img src="https://qph.fs.quoracdn.net/main-qimg-bd9acae48768ef5867f0f8b44683c2ca" class="border rounded" width="100px" height="100px">
                    <div class="px-md-5 px-2 my-auto border border-left-0">
                        <h3>Body massage</h3>
                        <p>Oil massage,Body scrub</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row justify-content-center my-4 small-services">
                    <img src="https://5.imimg.com/data5/MI/OV/GLADMIN-51493247/manicure-pedicure-500x500.jpg" class="border rounded" width="100px" height="100px">
                    <div class="px-md-5 px-2 my-auto border border-left-0">
                        <h3>Menicure</h3>
                        <p>Nail art,Cleaning,Nail polish</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="appointment.php" class="btn btn-danger visit my-5">Get Appointment</a>
        </div>
    </div>
    </section>
    <!--Contact-->
    <section id="contact" class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="sub-title text-center">Contact us</h1>
                    <p class="py-3">Feel free to contact us any time we will get back to you as soon as we can!</p>
                    <form action="#" method="post" autocomplete="off">
                        <span class="text-danger">
                            <?php if (isset($res)) {
                                echo $res;
                            } ?>
                        </span>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control py-4" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="mail">Email address:</label>
                            <input type="email" name="email" class="form-control py-4" id="mail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="msg">Massage:</label>
                            <textarea name="message" type="text" placeholder="Enter Your Message" id="message" class="form-control py-4" rows="5"></textarea>
                        </div>
                        <button class="btn btn-info visit" type="submit">submit</button>
                    </form>
                </div>
                <?php
                if (mysqli_num_rows($quaryData) > 0) {
                    foreach ($quaryData as $item) {
                ?>
                        <div class="col-md-6 contact">
                            <h3 class="sub-title text-center mt-5">Info</h3>
                            <div class="foot-media mt-5 ml-md-5 pl-md-4 border-left">
                                <ul>
                                    <li class="d-flex align-items-ceter"><i class="bx bxs-message pr-3 pr-lg-4"></i>
                                        <p><a class="text-dark" href="mailto:<?= $item['email'] ?>"><?= $item['email'] ?></a></p>
                                    </li>
                                    <li class="d-flex align-items-ceter"><i class="bx bxs-phone-call pr-3 pr-lg-4"></i>
                                        <p><a class="text-dark" href="tel:+<?= $item['phone'] ?>"><?= $item['phone'] ?></a></p>
                                    </li>
                                    <li class="d-flex align-items-ceter"><i class="bx bxs-building pr-3 pr-lg-4"></i>
                                        <p><?= $item['address'] ?></p>
                                    </li>
                                    <li class="d-flex align-items-ceter"><i class="bx bxs-time-five pr-3 pr-lg-4"></i>
                                        <p>9.00 am to 8.00 pm</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                <?php
                    }
                } ?>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include "inc/footer.php"; ?>