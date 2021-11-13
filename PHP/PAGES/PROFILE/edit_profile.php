<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span class="fw-bold"> <?php echo ($pages); ?> </span></label>
</div>

<?php
include('../CONFIG/connect_database.php');
include('../FUNCTIONS/function_profile.php');
$id             = $_GET['id'];
$editProfile    = show("SELECT * FROM user WHERE id = $id")[0];

if (isset($_POST['save'])) {
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert ('Profile changed successfully');
                document.location.href = 'main.php?page=My profile'; 
            </script>";
    } else{
        echo "
            <script>
                alert ('Profile failed to change');
            </script>";
    }
}
?>

<div class='row'>
    <div class="md-col-12">
        <div class="container pt-1">
            <div class="row justify-content-center">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $editProfile["id"]; ?>">
                    <input type="hidden" name="oldImage" value="<?php echo $editProfile["image"]; ?>">
                    <div class="row">
                        <div class="col-4">
                            <img src="../../DATABASE/IMAGE/<?php echo $editProfile["image"]; ?>" class="img-thumbnail img_change_image_profile" alt="Foto profile">
                            <div>
                                <label for="change_image" class="label_btn_change_image"><img src="../../ASSET/ICON/PACKAGE/bxs-image.svg" class="img_edit_profile">
                                    Change image
                                </label>
                                <input type="file" class="btn_change_image_profile" id="change_image" accept="image/*" name="image">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your first name or nickname" name="name" autocomplete="off" value="<?php echo $editProfile["name"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $editProfile["email"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Phone number</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your phone number" name="phone_number" autocomplete="off" value="<?php echo $editProfile["phone_number"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Address</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your address" name="address" autocomplete="off" value="<?php echo $editProfile["address"]; ?>">
                            </div>
                            <div class="mb-4">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Access rights level</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Your access rights level" name="access" value="<?php echo $editProfile["access"]; ?>" disabled>
                            </div>
                            <button type="submit" class="btn btn_save_edit_profile" name="save"><img src="../../ASSET/ICON/PACKAGE/bxs-save.svg" class="img_edit_profile">Save</button>
                            <a href="main.php?page=My profile" type="button" class="btn btn_cancel_edit_profile"><img src="../../ASSET/ICON/PACKAGE/close-circle-fill.svg" class="img_edit_profile">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>