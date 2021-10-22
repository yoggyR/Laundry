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
                            <label for="formGroupExampleInput" class="form-label" style="font-weight: bold;">Current Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Current Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">New Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter New Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Confirm New
                                Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Confirm New Password" required>
                        </div>
                        <button type="submit" class="btn btn_save_change_password">Save</button>
                        <a href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Home" type="button" class="btn btn_cancel_change_password">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>