<?php include "inc/header.php"; ?>


<?php include '../classes/Slider.php'; ?>

<?php include 'inc/left-sidebar.php'; ?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h6 class="mb-0 alert alert-info"><strong>Sliders</strong>
      <a href="addSlider.php" class="btn btn-info">
        <i class="fa fa-plus" aria-hidden="true"></i>
        New Slider</a>
    </h6>
    <?php
    $service = new Slider();
    if (isset($_GET['delid'])) {
      $gatId = base64_decode($_GET['delid']);
      $delsuccess = $service->del($gatId);
    }
    ?>
    <div class="d-flex">
      <table class="m-2 table table-hover table-bordered table-striped w-98">
        <thead class='w-100'>
          <tr class='w-100'>
            <th>No</th>
            <th>Name</th>
            <th>Heading</th>
            <th>Sub Heading</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $getItem = $service->show();
          $i = 0;
          if ($getItem) {
            while ($result = $getItem->fetch_assoc()) {
              $i++;
          ?>
              <tr>
                <td><?= $i ?></td>
                <td><?= ucwords($result['name']); ?></td>
                <td><?= ucwords($result['heading']); ?></td>
                <td><?= $result['subheading'] ?></td>
                <td><img class='' height="50" width="50" src="<?= $result['image']; ?>" alt="<?= $result['image']; ?>"></td>
                <td>
                  <span>
                    <a href="editSlider.php?id=<?= base64_encode($result['id']); ?>">Edit</a> ||
                    <a onclick="return confirm('Are You Sure To Delete')" href="?delid=<?= base64_encode($result['id']); ?>">Delete</a>
                  </span>
                </td>
              </tr>
          <?php }
          } ?>
        </tbody>
      </table>
    </div>

  </div>
  <?php include 'inc/footer.php'; ?>