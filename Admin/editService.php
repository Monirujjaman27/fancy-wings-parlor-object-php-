<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/Service.php'; ?>



<?php
$service = new Service();
$gatId = base64_decode($_GET['id']);
if (!isset($gatId) || $gatId == NULL) {
  header('Location:service.php');
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
    <h6 class="alert alert-info mb-0"><strong>Edit Service</strong></h6>

    <h6 class="text-warning">
      <?php
      if (isset($updatePro)) {
        echo $updatePro;
      }
      ?>
    </h6>
    <div class="row">
      <div class="mx-2 col-sm-6 m-auto card p-3">
        <form action="" method="POST" enctype="multipart/form-data">
          <label for="Name">Name</label>
          <input class="form-control" value="<?php echo $result['name'] ?>" name="name" type="text" placeholder="Service Name">
          <input value="<?php echo $result['image'] ?>" name="oldImage" type="hidden">
          <label for="Name">Image</label>
          <input class="form-control" name="image" type="file" placeholder="Service Name">
          <br>
          <td><img class='' height="50" width="50" src="<?= $result['image']; ?>" alt=""></td>
          <br>
          <a class="btn btn-info mt-3" href="service.php">Back</a>
          <input class="btn btn-success mt-3 float-right" type="submit" value="Update Service">
        </form>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>