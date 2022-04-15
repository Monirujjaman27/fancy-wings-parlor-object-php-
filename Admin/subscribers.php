<?php include "inc/header.php"; ?>
<?php include '../classes/Subscribers.php'; ?>

<?php include 'inc/left-sidebar.php'; ?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h5 class="mb-0 alert alert-info"><strong>Subscribers</strong> </h5>
    <?php
    $service = new Subscribers();
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
            <th>Email</th>
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
                <td><?= $result['email']; ?></td>
                <td>
                  <span>
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