<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Package setting</label>
    <label><span style="font-weight: bold; margin-left: -490px;"> / <?php echo ($pages); ?> </span></label><a href="main.php?page=Package setting" type="button" class="btn-close" title="Close this page"></a>
</div>
<?php
include('../FUNCTIONS/function_package-setting.php');
$id             = $_GET['id'];
$editPackage    = show("SELECT * FROM package_setting WHERE id = $id")[0];

if (isset($_POST['save'])) {
    if (edit($_POST) > 0) {
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
                <input type="hidden" name="id" value="<?php echo $editPackage["id"]; ?>">
                <label class="form-label cnpe_label">Name package</label>
                <input type="text" class="form-control" placeholder="Enter name package" name="name_packages" value="<?php echo $editPackage["name_packages"]; ?>">
                <input type="hidden" name="date_modified" value="<?php echo date('d-m-Y'); ?>">

                <label class="form-label cnpe_label pt-2">Price per kg</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text cnpe_span">IDR</span>
                    <input type="text" class="form-control" placeholder="Enter price per kg" name="price_per_kg" value="<?php echo $editPackage["price_per_kg"]; ?>">
                </div>

                <label class="form-label cnpe_label pt-2">Min weight</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Minimum weight" name="min_weight" value="<?php echo $editPackage["min_weight"]; ?>">
                    <span class="input-group-text cnpe_span">Kg</span>
                </div>

                <label class="form-label cnpe_label pt-2">Max weight</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Maximum weight" name="max_weight" value="<?php echo $editPackage["max_weight"]; ?>">
                    <span class="input-group-text cnpe_span">Kg</span>
                </div>

                <label class="form-label cnpe_label pt-2">Processing time</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Enter the number of days required" name="processing_time" value="<?php echo $editPackage["processing_time"]; ?>">
                    <span class="input-group-text cnpe_span">Days</span>
                </div>

                <div>
                    <label class="form-label cnpe_label pt-2">Price per level</label>
                    <div class="input-group flex-nowrap" style="margin-bottom: 14px;">
                        <span class="input-group-text cnpe_span">Level 1</span>
                        <input type="text" class="form-control" placeholder="Enter price per level" name="level_1" value="<?php echo $editPackage["level_1"]; ?>">
                    </div>
                    <div class="input-group flex-nowrap" style="margin-bottom: 14px;">
                        <span class=" input-group-text cnpe_span">Level 2</span>
                        <input type="text" class="form-control" placeholder="Enter price per level">
                    </div>
                    <div class="input-group flex-nowrap" style="margin-bottom: 14px;">
                        <span class="input-group-text cnpe_span">Level 3</span>
                        <input type="text" class="form-control" placeholder="Enter price per level">
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
                <div class="pt-5 pb-5" style="margin-left: 315px;">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" id="on" class="btn cnpe_btn_turn_on" onclick="buttonOnOff()"><img src="../../ASSET/ICON/PACKAGE/bx-radio-circle-marked.svg" class="cnpe_img_on_of">Turn on</button>
                            <button type="button" id="off" class="btn cnpe_btn_turn_off" onclick="buttonOnOff()"><img src="../../ASSET/ICON/PACKAGE/bx-radio-circle.svg" class="cnpe_img_on_of">Turn off</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn cnpe_btn_save_edit" name="save"><img src="../../ASSET/ICON/PACKAGE/bxs-save.svg" class="cnpe_img">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>