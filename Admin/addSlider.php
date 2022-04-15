<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/Slider.php'; ?>
<?php
$services = new Slider();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $serviceName      = $_POST['name'];
  $insert = $services->add($_POST, $_FILES);
}
?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h1 class="alert alert-info mb-0"><strong>Create Slider</strong></h1>

    <div class="row mt-2">
      <div class="mx-2 col-6 m-auto card p-3">
        <h6 class="text-danger">
          <?php if (isset($insert)) {
            echo $insert;
          } ?>
        </h6>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="Name">Name</label>
            <input class="form-control" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" type="text" required placeholder="Name">
          </div>
          <div class="form-group">
            <label for="heading">Heading</label>
            <input class="form-control" name="heading" value="<?php echo isset($_POST["heading"]) ? $_POST["heading"] : ''; ?>" type="text" required placeholder="Heading">
          </div>
          <div class="form-group">
            <label for="subheading">Subheading</label>
            <input class="form-control" name="subheading" value="<?php echo isset($_POST["subheading"]) ? $_POST["subheading"] : ''; ?>" type="text" required placeholder="Subheading">
          </div>
          <div class="form-group">
            <label for="Name">Image</label>
            <input class="form-control" name="image" type="file">
          </div>
          <a class="btn btn-info mt-3" href="sliders.php"><i class="fa fa-arrow-left"></i> Back</a>
          <button class="btn btn-success mt-3 float-right" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        </form>
      </div>
    </div>

  </div>
  <?php include 'inc/footer.php'; ?>