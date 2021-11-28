<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Package setting</label>
    <label><span style="font-weight: bold; margin-left: -490px;"> / <?php echo ($pages); ?> </span></label><a href="main.php?page=Package setting" type="button" class="btn-close" title="Close this page"></a>
</div>
<?php
include('../FUNCTIONS/function_package-setting.php');
if (isset($_POST["save"])) {
    if (add($_POST) > 0) {
        echo "
            <script>
                alert ('Successfully');
                document.location.href = 'main.php?page=Package setting'; 
            </script>";
    } else {
        echo "
            <script>
                alert ('Failed');
            </script>";
    }
}
?>
<div class='row'>
    <div class="md-col-12">
        <div class="countainer pt-4 cnpe_countainer">
            <form action="" method="POST">
                <label class="form-label cnpe_label">Name package</label>
                <input type="text" class="form-control" placeholder="Enter name package" name="name_packages" autocomplete="off">
                <input type="hidden" name="date_created" value="<?php echo date('d-m-Y'); ?>">
                <input type="hidden" name="status"  value="Active">

                <label class="form-label cnpe_label pt-2">Price per kg</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text cnpe_span">IDR</span>
                    <input type="text" class="form-control" placeholder="Enter price per kg" name="price_per_kg" autocomplete="off">
                </div>

                <label class="form-label cnpe_label pt-2">Min weight</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Minimum weight" name="min_weight" autocomplete="off">
                    <span class="input-group-text cnpe_span">Kg</span>
                </div>

                <label class="form-label cnpe_label pt-2">Max weight</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Maximum weight" name="max_weight" autocomplete="off">
                    <span class="input-group-text cnpe_span">Kg</span>
                </div>

                <label class="form-label cnpe_label pt-2">Processing time</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Enter the number of days required" name="processing_time" autocomplete="off">
                    <span class="input-group-text cnpe_span">Days</span>
                </div>

                <div>
                    <label class="form-label cnpe_label pt-2">Price per level</label>
                    <div class="input-group flex-nowrap" style="margin-bottom: 14px;">
                        <span class="input-group-text cnpe_span">Level 1</span>
                        <input type="text" class="form-control" placeholder="Enter price per level" name="level_1" autocomplete="off">
                    </div>
                    <div class="input-group flex-nowrap" style="margin-bottom: 14px;">
                        <span class=" input-group-text cnpe_span">Level 2</span>
                        <input type="text" class="form-control" placeholder="Enter price per level" autocomplete="off">
                    </div>
                    <div class="input-group flex-nowrap" style="margin-bottom: 14px;">
                        <span class="input-group-text cnpe_span">Level 3</span>
                        <input type="text" class="form-control" placeholder="Enter price per level" autocomplete="off">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn cnpe_btn_new"><img src="../../ASSET/ICON/PACKAGE/bx-plus.svg" class="cnpe_img">New level</button>
                        </div>
                        <div class="col-6">
                            <div class="input-group flex-nowrap">
                                <button type="button" class="btn cnpe_btn_delete"><img src="../../ASSET/ICON/PACKAGE/bxs-trash.svg" class="cnpe_img">Delete level</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5 pb-5">
                    <button type="submit" class="btn cnpe_btn_save_new" name="save"><img src="../../ASSET/ICON/PACKAGE/bxs-save.svg" class="cnpe_img">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>