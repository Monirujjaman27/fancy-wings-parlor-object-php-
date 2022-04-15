<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/Contactmessage.php'; ?>


<div class="col-sm-10">
    <div class="card border-dark mh-600">
        <h6 class="mb-0 alert alert-info"><strong>Messages</strong></h1>
        <?php
        $cat = new ContactMessage();
        if (isset($_GET['delid'])) {
            $gatCatId = base64_decode($_GET['delid']);
            $delcatsuccess = $cat->delMessage($gatCatId);
        }
        if (isset($delcatsuccess)) {
            echo $delcatsuccess;
        }
        ?>
        <div class="d-flex">
            <table class="m-2 table table-hover table-bordered table-striped w-98">
                <thead class='w-100'>
                    <tr class='w-100'>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sowcat = new Contactmessage();
                    $getcat = $sowcat->showMessage();
                    $i = 0;
                    if ($getcat) {
                        while ($result = $getcat->fetch_assoc()) {
                            $i++;
                    ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= ucwords($result['name']); ?></td>
                                <td><?= $result['email']; ?></td>
                                <td><?= $result['phone']; ?></td>
                                <td><?= ucwords($result['messagebody']); ?></td>
                                <td><?= date('F j, Y', strtotime($result['created_at'])); ?></td>
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