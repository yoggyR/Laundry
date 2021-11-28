<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span class="fw-bold"> <?php echo ($pages); ?> </span></label>
    <a href="main.php?page=Home" type="button" class="btn-close" title="Close this page"></a>
</div>
<?php
include('../CONFIG/connect_database.php');
include('../FUNCTIONS/function_profile.php');
$dataProfile = show("SELECT * FROM user");
?>
<div class='row'>
    <div class="md-col-12">
        <div class="container receptacle_myprofile">
            <div class="row justify-content-center">
                <?php foreach ($dataProfile as $profile) : ?>
                    <div class="col-4">
                        <img src="../../DATABASE/IMAGE/<?php echo $profile["image"]; ?>" class="img-thumbnail img_my_profile" alt="Profile">
                    </div>
                    <div class="col-8" style="margin-left: -50px;">
                        <form action="" method="POST">

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label fw-bold">Name</label>
                                <p><?php echo $profile["name"]; ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Email</label>
                                <p><?php echo $profile["email"]; ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Phone Number</label>
                                <p><?php echo $profile["phone_number"]; ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Address</label>
                                <p><?php echo $profile["address"]; ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bold">Access Rights
                                    Level</label>
                                <p><?php echo $profile["access"]; ?></p>
                            </div>
                        </form>
                        <a type="button" href="main.php?page=Edit profile&id=<?php echo $profile['id']; ?>" class="btn btn_edit_and_change "><img src="../../ASSET/ICON/PACKAGE/bxs-edit.svg" class="img_btn_my_profile">Edit profile</a>
                        <a type="button" href="main.php?page=Change password" class="btn btn_edit_and_change"><img src="../../ASSET/ICON/PACKAGE/bxs-edit.svg" class="img_btn_my_profile">Change password</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>