<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>

<?php
include('../FUNCTIONS/function_package-setting.php');
$dataPackage = show("SELECT * FROM package_setting");
if (isset($_POST["search"])) {
    $dataPackage = search($_POST["keyword"]);
}
?>

<div class='row'>
    <div class="md-col-12">
        <div class="countainer count_package_setting">
            <div class="row align-items-start receptacle_package_setting">
                <div class="col-6">
                    <a href="main.php?page=Create new package" type="button" class="btn btn_create_new_package"><img src="../../ASSET/ICON/PACKAGE/bx-plus.svg" class="img_create_new_package"> Create new package</a>
                </div>

                <div class="col-6 ">
                    <form class="d-flex form_search_package_setting" action="" method="POST">
                        <input class="form-control me-2 input_search_package_setting" type="search" placeholder="Search data in the table" aria-label="Search" name="keyword" autocomplete="off">
                        <button class="btn btn_search_package_setting" type="submit" name="search">Search</button>
                    </form>
                </div>
            </div>

            <table class="table table_package_setting table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name packages</th>
                        <th>Date created</th>
                        <th>Date modified</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($dataPackage as $package) : ?>
                        <tr>
                            <td>
                                <p class="txt_content_package_setting"><?php echo $no; ?></p>
                            </td>
                            <td>
                                <p class="txt_content_package_setting"><?php echo $package["name_packages"]; ?></p>
                            </td>
                            <td>
                                <p class="txt_content_package_setting"><?php echo $package["date_created"]; ?></p>
                            </td>
                            <td>
                                <p class="txt_content_package_setting"><?php echo $package["date_modified"]; ?></p>
                            </td>
                            <td>
                                <p class="txt_content_package_setting"><?php echo $package["status"]; ?></p>
                            </td>
                            <td>
                                <a class="btn btn_edit_package" type="button" title="Edit" href="main.php?page=Edit package&id=<?php echo $package['id']; ?>"><img src="../../ASSET/ICON/PACKAGE/bxs-edit.svg" class="img_edit_package"></a>
                                |
                                <a class="btn btn_delete_package" type="button" title="Delete" href="main.php?page=delete&id=<?php echo $package['id']; ?>"><img src="../../ASSET/ICON/PACKAGE/bxs-trash.svg" class="img_delete_package" data-bs-toggle="modal" data-bs-target="#delete"></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group receptacle_btn_next_or_back" role="group" aria-label="Second group">
                    <button type="button" class="btn extra_next_or_back btn_next_or_back" disabled><img src="../../ASSET/ICON/PACKAGE/bxs-left-arrow.svg" class="arrow_next_and_back"> Back
                    </button>

                    <button type="button" class="btn extra_next_or_back" style="background-color: gray; color: white;">1</button>
                    <button type="button" class="btn extra_next_or_back">2</button>
                    <button type="button" class="btn extra_next_or_back">3</button>

                    <button type="button" class="btn extra_next_or_back btn_next_or_back">Next <img src="../../ASSET/ICON/PACKAGE/bxs-right-arrow.svg" class="arrow_next_and_back">
                    </button>
                </div> -->
        </div>
    </div>
</div>
</div>

<!-- NOTIF DELETE -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_Throw_away_re_x60k.svg" alt="" class="img_pop_up mb-3">
                <p class="txt_announcement">Are you sure?</p>
                <p class="txt_announcement_content">You will not be able to recover this data!</p>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn_choice" data-bs-toggle="modal" data-bs-target="#notifdelete">Yes</a>
                <button type="button" class="btn btn_choice" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- //NOTIF DELETE -->

<!-- DONE DELETE -->
<div class="modal fade" id="notifdelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="notifdeleteLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifdeleteLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_Done_re_oak4.svg" alt="" class="img_pop_up mb-3">
                <p class="txt_announcement">Done!</p>
                <p class="txt_announcement_content">Data deleted successfully</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn_choice" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- //DONE DELETE -->