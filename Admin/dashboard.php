<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/appointment.php'; ?>

<?php
$database = mysqli_connect('localhost', 'root', '', 'parlor');
$appointMentQuary = "SELECT * From appointment ORDER BY id DESC";
$contactQuary = "SELECT * From contactmessage ORDER BY id DESC";
$serviceQuary = "SELECT * From services ORDER BY id DESC";
$appointData = mysqli_query($database, $appointMentQuary);
$contactMessageCount = mysqli_query($database, $contactQuary);
$serviceCount = mysqli_query($database, $serviceQuary);
?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <div class="container">
      <h1><strong>Welcome <?php echo session::get('username'); ?> </strong></h1>
      <div class="card">
        <div class="row p-2 m-0">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="row p-1">
              <div class="col-9 p-2  bg-info text-align-center">
                <div class="text-align-center">
                  <p class="p-0 m-0 text-white">Total</p>
                  <strong><a class="text-white" href="appointment.php">Appointment</a></strong>
                </div>
              </div>
              <div class="col-3 bg-success">
                <h2 class="text-white pl-2 mt-2 text-align-center"><?php if (mysqli_num_rows($appointData) > 0) {
                                                                      echo  mysqli_num_rows($appointData);
                                                                    } ?></h2>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="row p-1">
              <div class="col-9 p-2  bg-warning text-align-center">
                <div class="text-align-center">
                  <p class="p-0 m-0 text-white">Total</p>
                  <strong><a class="text-white" href="contactmessage.php">Contact Message</a></strong>
                </div>
              </div>
              <div class="col-3 bg-info">
                <h2 class="text-white pl-2 mt-2 text-align-center"><?php if (mysqli_num_rows($contactMessageCount) > 0) {
                                                                      echo  mysqli_num_rows($contactMessageCount);
                                                                    } ?></h2>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="row p-1">
              <div class="col-9 p-2  bg-primary text-align-center">
                <div class="text-align-center">
                  <p class="p-0 m-0 text-white">Total</p>
                  <strong > <a class="text-white" href="service.php"> Services</a></strong>
                </div>
              </div>
              <div class="col-3 bg-danger">
                <h2 class="text-white pl-2 mt-2 text-align-center"><?php if (mysqli_num_rows($serviceCount) > 0) {
                                                                      echo  mysqli_num_rows($serviceCount);
                                                                    } ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>