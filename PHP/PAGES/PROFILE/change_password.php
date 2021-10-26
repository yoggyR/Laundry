<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>
<div class='row'>
    <div class="md-col-12">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-1">
                    <img src="../../ASSET/ILLUSTRATION/undraw_Preferences_re_49in.svg" class="img_change_password">
                </div>
                <div class="col-md-11">
                    <form action="" method="POST" class="form_change_password">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label" style="font-weight: bold;">Current password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Enter your current password" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">New password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter new password" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Confirm new
                                password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter confirm new password" required>
                        </div>
                        <button type="submit" class="btn btn_save_change_password">Save</button>
                        <a href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Home" type="button" class="btn btn_cancel_change_password">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>