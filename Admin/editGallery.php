<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/Galleries.php'; ?>



<?php
$service = new Galleries();
$gatId = base64_decode($_GET['id']);
if (!isset($gatId) || $gatId == NULL) {
  header('Location:galery.php');
} else {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatePro = $service->update($_POST, $_FILES, $gatId);
  }
}
$data = $service->showById($gatId);
$result = $data->fetch_assoc();
?>

<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h1 class="alert alert-info mb-0"><strong>Edit Gallery</strong></h1>


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
            <input class="form-control" name="name" value="<?php echo isset($result["name"]) ? $result["name"] : ''; ?>" type="text" required placeholder="Name">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" type="text" placeholder="Description" cols="30" rows="10"><?php echo isset($result["description"]) ? $result["description"] : ''; ?></textarea>
          </div>
          <div class="form-group">
            <label for="Name">Image</label>
            <input class="form-control" name="image" type="file">
            <input class="form-control" name="oldImage" value="<?php echo isset($result["image"]) ? $result["image"] : ''; ?>" type="hidden">
          </div>
          <div class="form-group">
            <img class='' height="50" width="50" src="<?= $result['image']; ?>" alt="">
          </div>
          <a class="btn btn-info mt-3" href="sliders.php"><i class="fa fa-arrow-left"></i> Back</a>
          <button class="btn btn-success mt-3 float-right" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        </form>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>