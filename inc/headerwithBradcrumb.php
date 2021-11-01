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
    <link href="assets/css/hover-min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./Admin/assets/img/fav.jpg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icon cdn -->
    <!-- boxicon cdn -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- external style -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <!-- icon -->
        <?php
        $database = mysqli_connect('localhost', 'root', '', 'parlor');
        $quary = "SELECT * FROM default_setting where id = 1";
        $quaryData = mysqli_query($database, $quary);
        ?>
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
        <section class="mt-5 py-4 bg-info">
            <div class="container mt-5">
                <ul class="list-unstyled d-flex m-auto w-100 py-4">
                    <li class="mx-3">Home</li>
                    <li class="">/</li>
                    <li class="mx-3">Appointment</li>
                </ul>
            </div>
        </section>
    </header>