<?php
include 'lib/session.php';
session::init();
include 'lib/database.php';
include 'halpers/formet.php';
spl_autoload_register(function ($classes) {
    include_once "classes/" . $classes . ".php";
});
$db = new database();
$fm = new Format();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fancy wings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- style links -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="./Admin/assets/img/fav.jpg" type="image/x-icon">

    <link href="assets/css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icon cdn -->
    <!-- boxicon cdn -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- external style -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <!--navigation bar-->
        <nav class="navbar nav-bar-expand-lg fixed-top py-3">
            <!--logo-->
            <h3 class="pl-3">
                <a href="index.php" class="nav-brand logo">𓂀 𝐹𝒶𝓃𝒸𝓎<span> 𝒲𝒾𝓃𝑔𝓈 𓂀</span></a>
            </h3>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#">
            </button>
            <!--nav-items-->
            <ul>
                <li><a class="active" href="#home">Home<i class="fa fa-fw fa-star-o"></i></a></li>
                <li><a class="active" href="#about">About<i class="fa fa-fw fa-star-o"></i></a></li>
                <li><a class="active" href="#feature">Feature<i class="fa fa-fw fa-star-o"></i></a></li>
                <li><a class="active" href="#services">Services<i class="fa fa-fw fa-star-o"></i></a></li>
                <li><a class="active" href="#contact">Contact<i class="fa fa-fw fa-star-o"></i></a></li>
            </ul>
            <label id="icon">
                <i class="fas fa-bars"></i>
            </label>
            </div>
        </nav>
        <!-- Home -->
        <section id="home">
            <div class="container mt-5">
                <div class="row py-4 mt-5 d-flex flex-lg-row-reverse justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-6 mb-5 mb-lg-0" id="person-img">
                        <!-- Poster image -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-5 mt-lg-0 pt-5 pt-lg-0 detail">
                        <h1 class="title">We are here!</h1>
                        <h4 class="title">Fancy wings</h4>
                        <h4 class="title">Women beauty parlour</h4>
                    </div>
                    <div class="media p-3">
                        <div class="media-body ml-3">
                            <h5 class="sub-title">-For face gloss and all unit upgrades</h5>
                            <p>Fancy wings is the new and leading women's beauty parlour in dhaka.WE are dedicated artists and we make your body units beauty and we takes care about your skin,face...</p>
                            <p>Are you exicated with the fluttering sound of <span>Fancy wings?</span></p>
                        </div>
                        <img style="width:300px;" class="rounded-circle" src="https://jiyasbeautylounge.com/wp-content/uploads/2015/03/Makeup-Bridal1-300x300.jpg" alt="">
                    </div>
                </div>
                <!-- <div class="input-group col-12 col-sm-10 col-md-8 col-lg-10 col-xl-9">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger explore rounded-right">
                            Explore
                        </button>
                    </div>
                </div> -->
                <!-- icon -->
                <?php
                $database = mysqli_connect('localhost', 'root', '', 'parlor');
                $quary = "SELECT * FROM default_setting where id = 1";
                $quaryData = mysqli_query($database, $quary);
                if (mysqli_num_rows($quaryData) > 0) {
                    foreach ($quaryData as $item) {
                ?>
                        <div class="social-media">
                            <ul class="d-flex pt-4">
                                <li class="mr-4"><i class="bx bxs-right-arrow bx-fade-left"></i></li>
                                <li class="mr-4"><a href="http://<?= $item['instagram'] ?>" target="_blank" rel="noopener noreferrer"><i class="bx bxl-instagram-alt"></a></i></li>
                                <li class="mr-4"><a href="http://<?= $item['fb'] ?>" target="_blank" rel="noopener noreferrer"><i class="bx bxl-facebook-circle"></a></i></li>
                                <li class="mr-4"><a href="http://<?= $item['twitter'] ?>" target="_blank" rel="noopener noreferrer"><i class="bx bxl-twitter"></i></a></li>
                            </ul>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            </div>
            </div>
        </section>
    </header>