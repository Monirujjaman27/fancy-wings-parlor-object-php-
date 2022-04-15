<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/Service.php'; ?>


<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h6 class="mb-0 alert alert-info"><strong>Services</strong>
      <a href="addService.php" class="btn btn-info">
        <i class="fa fa-plus" aria-hidden="true"></i>
        New Service</a>
    </h1>
    <?php
    $service = new Service();
    if (isset($_GET['delid'])) {
      $gatId = base64_decode($_GET['delid']);
      $delsuccess = $service->del($gatId);
    }
    if (isset($delsuccess)) {
      echo $delsuccess;
    }
    ?>
    <div class="d-flex">
      <table class="m-2 table table-hover table-bordered table-striped w-98">
        <thead class='w-100'>
          <tr class='w-100'>
            <th>No</th>
            <th>Service Name</th>
            <th>Price</th>
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
                <td><?= $result['price'] ?></td>
                <td><img class='' height="50" width="50" src="<?= $result['image']; ?>" alt="<?= $result['image']; ?>"></td>
                <td>
                  <span>
                    <a href="editService.php?id=<?= base64_encode($result['id']); ?>">Edit</a> ||
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