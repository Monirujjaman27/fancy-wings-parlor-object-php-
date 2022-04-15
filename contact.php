<?php include "inc/header.php"; ?>
<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('assets/images/b1.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix">
        <h1>Contact Us</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
						============================================= -->
                <div class="postcontent col-lg-9">

                    <h3>Contact Us Now</h3>

                    <div class="form-widget">

                        <div class="form-result"></div>
                        <?php

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (empty($_POST['email']) || empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['message'])) {
                                echo "<span class='text-danger'>All Field is Required  </span>";
                            } else {
                                echo $contact_message_class->contact($_POST);
                                $_POST['email'] = '';
                                $_POST['name'] = '';
                                $_POST['phone'] = '';
                                $_POST['message'] = '';
                            }
                        }
                        ?>
                        <form class="mb-0" id="template-contactform" name="template-contactform" action="" method="post" novalidate="novalidate">
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" class="sm-form-control required">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="required email sm-form-control">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" class="sm-form-control">
                                </div>


                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">
                    <address>
                        <strong>Headquarters:</strong><br>
                        <?= $default_settings_items['address'] ?>
                    </address>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr><?= $default_settings_items['phone'] ?><br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> <?= $default_settings_items['email'] ?>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>

<!-- Footer
		============================================= -->

<?php include "inc/footer.php"; ?>