<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/defaultSettings.php'; ?>

<?php
$setting = new defaultSettings();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $insert = $setting->updateDefaults($_POST, $_FILES);
}
?>
<div class="col-sm-10">
    <div class="card border-dark mh-600">
        <h1 class="alert alert-info mb-0"><strong>Settings</strong></h1>
        <div class="mx-2 col-sm-10">
            <form action="" method="POST" enctype="multipart/form-data">
                <p class="text-danger">
                    <?php
                    if (isset($insert)) {
                        echo $insert;
                    }
                    ?>
                </p>
                <table class="w-100">
                    <tbody class="w-100">
                        <?php
                        $data = $setting->showById(null);
                        $item = $data->fetch_assoc();
                        ?>
                        <tr>
                            <td class="w-25"><label class="font-weight-bold" for="title">Site Title: </label></td>
                            <td>
                                <input id='title' class="form-control  my-2" name="title" type="text" placeholder="Product Tilte" value="<?= $item['title'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25"><label class="font-weight-bold" for="logo"> Logo: </label></td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <input id='logo' class="form-control  my-2" name="logo" type="file">
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= $item['logo'] ?>" class="img-thumbnail float-right" height="50px" width="50px" alt="logo">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="address">Address: </label></td>
                            <td>
                                <textarea class="form-control  my-2" name="address" id="Address" cols="30" rows="2" placeholder="Address"><?= $item['address'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="phone">Phone: </label></td>
                            <td>
                                <input class="form-control my-2" id='phone' name="phone" type="text" placeholder="Phone" value="<?= $item['phone'] ?>">
                            </td>
                        </tr>

                        <tr>
                            <td><label class="font-weight-bold" for="email">Email: </label></td>
                            <td>
                                <input class="form-control my-2" id='email' name="email" type="email" placeholder="Email" value="<?= $item['email'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="google">Google: </label></td>
                            <td>
                                <input class="form-control my-2" id='google' name="google" type="url" placeholder="Google" value="<?= $item['google'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="fb">Facebook: </label></td>
                            <td>
                                <input class="form-control my-2" id='fb' name="fb" type="url" placeholder="Facrbook" value="<?= $item['fb'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="twitter">Twitter: </label></td>
                            <td>
                                <input class="form-control my-2" id='twitter' name="twitter" type="url" placeholder="Twitter" value="<?= $item['twitter'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="instagram">Instagram: </label></td>
                            <td>
                                <input class="form-control my-2" id='instagram' name="instagram" type="url" placeholder="Instagram" value="<?= $item['instagram'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="youtube">Youtube: </label></td>
                            <td>
                                <input class="form-control my-2" id='youtube' name="youtube" type="url" placeholder="Youtube" value="<?= $item['youtube'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="linkedin">Linkedin: </label></td>
                            <td>
                                <input class="form-control my-2" id='linkedin' name="linkedin" type="url" placeholder="Linkedin" value="<?= $item['linkedin'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="fb-page">Facebookb Page: </label></td>
                            <td>
                                <input class="form-control my-2" id='fb-page' name="fb_page" type="url" placeholder="Facebookb Page" value="<?= $item['fb_page'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="About">About: </label></td>
                            <td>
                                <textarea class="form-control  my-2" name="about" id="about" cols="30" rows="2" placeholder="About"><?= $item['about'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="copyright">Copyright: </label></td>
                            <td>
                                <textarea class="form-control  my-2" name="copyright" id="copyright" cols="30" rows="2" placeholder="Copyright"><?= $item['copyright'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="font-weight-bold" for="bodybackground">Body Background: </label></td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <input id='bodybackground' class="form-control  my-2" name="bodybackground" type="file">
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= $item['bodybackground'] ?>" class="img-thumbnail float-right" height="50px" width="50px" alt="logo">
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input class="btn btn-info my-3" type="submit" value="Save Changes">
                            </td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </form>
        </div>

    </div>

    <?php include 'inc/footer.php'; ?>