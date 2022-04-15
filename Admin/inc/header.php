<?php
include '../lib/session.php';
Session::checkSession();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/img/fav.jpg" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Icons/Glyphs -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="../assets/images/logo.jpg" type="image/gif" sizes="16x16">
  <title>Admin Panel</title>
</head>

<body class="dashboard-body">
  <header>
    <nav class="m-0">
      <div class="row mx-3">
        <div class="col-sm-8">
          <a href="../index.php">
            <img src="../assets/images/logo.jpg" class="img-thumbnail" width="30px" alt=" logo">
          </a>
        </div>
        <div class="col-sm-4">
          <ul class="header-top-menue d-flex float-right mt-2">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'logout') {
              session::destroy();
            }
            ?>
            <li class="mr-2"><a href="#">Name: <?php echo session::get('username');
                                                echo ' |'; ?></a></li>
            <li class="mr-2"><a href="?action=logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?php
  if (isset($_GET['action']) && $_GET['action'] == 'delete-success') {
    session::set('success', '');
  } elseif (isset($_GET['action']) && $_GET['action'] == 'delete-warning') {
    session::set('warning', '');
  }
  ?>

  <?php if (isset($_SESSION['success']) && $_SESSION['success'] !== '') { ?>
    <div class="alert alert-success alert-dismissible fade show text-capitalize">
      <?= $_SESSION['success'] ?>
      <a href="?action=delete-success" type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
    </div>
  <?php } ?>
  <?php if (isset($_SESSION['warning']) && $_SESSION['warning'] !== '') { ?>
    <div class="alert alert-warning alert-dismissible fade show">
      <?= session::get('warning') ?>
      <a href="?action=delete-warning" type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
    </div>
  <?php } ?>