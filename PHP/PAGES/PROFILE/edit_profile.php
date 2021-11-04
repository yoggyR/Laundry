<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>

<?php
include('../CONFIG/connect_database.php');
include('function_profile.php');
$id = $_GET['id'];
$editProfile = show("SELECT * FROM user WHERE id = $id")[0];

if (isset($_POST['save'])) {
    if (edit($_POST) > 0) {
        echo "
    <script>
        alert ('Profil berhasil diubah');
        document.location.href = 'main.php?page=My profile'; 
    </script>
    ";
    }else {
        echo "Gagal";
    }
    
}
?>

<div class='row'>
    <div class="md-col-12">
        <div class="container" style="margin-top: 5px;">
            <div class="row justify-content-center">
                <div class="col-4">
                    <img style="height: 300px; width: 280px; border-radius: 20px;" src="../../ASSET/FOTO/<?php echo $editProfile["image"]; ?>" class="img-thumbnail" alt="Foto profile">
                    <div style="margin-left: 60px; margin-top: 20px;">
                        <button type="submit" class="btn btn_change_image"><img src="../../ASSET/ICON/PACKAGE/211677_image_icon.svg" class="img_edit_profile">Change image</button>
                    </div>

                </div>
                <div class="col-8" style="margin-left: -50px;">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $editProfile["id"]; ?>">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label" style="font-weight: bold;">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your first name or nickname" name="name" autocomplete="off" value="<?php echo $editProfile["name"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $editProfile["email"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Phone number</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your phone number" name="phone_number" autocomplete="off" value="<?php echo $editProfile["phone_number"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Address</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your address" name="address" autocomplete="off" value="<?php echo $editProfile["address"]; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Access rights level</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Your access rights level" name="access" value="<?php echo $editProfile["access"]; ?>" disabled>
                        </div>
                        <button type="submit" class="btn btn_save_edit_profile" name="save"><img src="../../ASSET/ICON/PACKAGE/2639912_save_icon.svg" class="img_edit_profile">Save</button>
                        <a href="main.php?page=My profile" type="button" class="btn btn_cancel_edit_profile"><img src="../../ASSET/ICON/PACKAGE/4945336_business_close_document_files_folder_icon.svg" class="img_edit_profile">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>