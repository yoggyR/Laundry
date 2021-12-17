<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Package setting</label>
    <label>
        <span style="font-weight: bold; margin-left: -490px;"> / <?php echo ($pages); ?> </span>
    </label>
    <a href="main.php?page=Package setting" type="button" class="btn-close" title="Close this page"></a>
</div>

<?php
include('../FUNCTIONS/function_package-setting.php');
$id             = $_GET['id'];
$editPackage    = show("SELECT * FROM package_setting WHERE id = $id")[0];

if (isset($_POST['save'])) {
    // var_dump(edit($_POST));
    // exit;
    if (edit($_POST) >= 0) {
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
                <div class="pt-5" style="margin-left: 315px;">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" id="on" name="status" value="Non Active" class="btn cnpe_btn_turn_on" onclick="buttonOnOff()"><img src="../../ASSET/ICON/PACKAGE/bx-radio-circle-marked.svg" class="cnpe_img_on_of">Turn on</button>
                            <button type="button" id="off" name="status" value="Active" class="btn cnpe_btn_turn_off" onclick="buttonOnOff()"><img src="../../ASSET/ICON/PACKAGE/bx-radio-circle.svg" class="cnpe_img_on_of">Turn off</button>
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