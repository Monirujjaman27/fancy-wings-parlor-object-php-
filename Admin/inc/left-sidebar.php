<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
        <div class="card border-dark">
          <div class="card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'dashboard.php') {
                                    echo 'bg-info';
                                  } else {
                                    echo 'bg-primary';
                                  } ?>">
            <strong><a class="text-dark" href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></strong>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'service.php') {
                                              echo 'bg-info';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="service.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Service</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'contactmessage.php') {
                                              echo 'bg-info';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="contactmessage.php"><i class="fa fa-comments" aria-hidden="true"></i> Contact Message</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'appointment.php') {
                                              echo 'bg-info';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="appointment.php"><i class="fa fa-file-text" aria-hidden="true"></i> Appointment</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'settings.php') {
                                              echo 'bg-info';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></h6>
          </div>
        </div>
      </div>