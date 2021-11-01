<?php include "inc/headerwithBradcrumb.php"; ?>
<?php include './classes/contactMessage.php'; ?>
<?php
$contactmessage = new ContactMessage();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $res = $contactmessage->appointment($_POST);
}
?>
<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <form action="#" method="post" autocomplete="off">
                    <span class="text-danger">
                        <?php if (isset($res)) {
                            echo $res;
                        } ?>
                    </span>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email address:</label>
                        <input type="email" name="email" class="form-control" id="mail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="mail">Phone:</label>
                        <input type="tal" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="appoint_for">Select Appointment:</label>
                        <select class="form-control" name="appoint_for" id="appoint_for">
                            <option value="Make up">Make up</option>
                            <option value="Facial">Facial</option>
                            <option value="Hair style">Hair style</option>
                            <option value="Body massage">Body massage</option>
                            <option value="Menicure">Menicure</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="msg">Massage:</label>
                        <textarea name="message" type="text" placeholder="Enter Your Message" id="message" class="form-control" rows="5"></textarea>
                    </div>
                    <button class="btn btn-info btn-block visit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "inc/footer.php"; ?>