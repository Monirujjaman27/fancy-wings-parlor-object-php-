<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/Service.php'; ?>
<?php
$services = new Service();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $serviceName      = $_POST['name'];
  $insert = $services->add($_POST, $_FILES);
}
?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h1 class="alert alert-info mb-0"><strong>Add New Service</strong></h1>
    <h6 class="text-warning">
      <?php if (isset($insert)) {
        echo $insert;
      } ?>
    </h6>
    <div class="mx-2 col-sm-4">
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="Name">Name</label>
        <input class="form-control" name="name" type="text" placeholder="Service Name">
        <label for="Name">Image</label>
        <input class="form-control" name="image" type="file" placeholder="Service Name">
        <a class="btn btn-info mt-3" href="service.php">Back</a>
        <input class="btn btn-info mt-3 float-right" type="submit" value="Add Service">
      </form>
    </div>

  </div>
  <?php include 'inc/footer.php'; ?>