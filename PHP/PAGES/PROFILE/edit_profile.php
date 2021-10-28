<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>
<div class='row'>
    <div class="md-col-12">
        <div class="container" style="margin-top: 5px;">
            <div class="row justify-content-center">
                <div class="col-4">
                    <img style="height: 300px; width: 280px; border-radius: 20px;" src="../../ASSET/FOTO/amir-seilsepour-5vg_SarQimA-unsplash.jpg" class="img-thumbnail" alt="orang tua">
                    <div style="margin-left: 70px; margin-top: 20px;">
                        <button type="submit" class="btn btn_change_image" style="font-weight: bold;"><img src="../../ASSET/ICON/PACKAGE/211677_image_icon.svg" class="img_edit_profile">Change image</button>
                    </div>

                </div>
                <div class="col-8" style="margin-left: -50px;">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label" style="font-weight: bold;">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Amir Seilsepour">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="amir@laundry.com">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Phone number</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="0895801121100">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Address</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Pangeran Antasari Street No. 22 Pejaten, South Jakarta">
                        </div>
                        <div class="mb-4">
                            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Access rights level</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Super admin" disabled>
                        </div>
                        <button type="submit" class="btn btn_save_edit_profile" style="font-weight: bold;"><img src="../../ASSET/ICON/PACKAGE/2639912_save_icon.svg" class="img_edit_profile">Save</button>
                        <a href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Home" type="button" class="btn btn_cancel_edit_profile" style="font-weight: bold;"><img src="../../ASSET/ICON/PACKAGE/4945336_business_close_document_files_folder_icon.svg" class="img_edit_profile">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>