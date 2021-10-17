<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>
<div class='row'>
    <div class="md-col-12">

        <div class="row align-items-start pt">
            <div class="col-6">
                <a href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Create New Service Package" type="button" class="btn cnsp"><img src="../../ASSET/ICON/PACKAGE/134224_add_plus_new_icon.svg" class="adds"> Create New Service Package</a>
            </div>

            <div class="col-6 ">
                <form class="d-flex srh ">
                    <input class="form-control me-2 rh" type="search" placeholder="Search data in the table" aria-label="Search">
                    <button class="btn vt" type="submit">Search</button>
                </form>
            </div>
        </div>


        <table class="table als table-bordered">
            <thead style="margin-right: 10px;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Service Packages</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Date Modified</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="mt">1</p>
                    </td>
                    <td>
                        <p class="mt">Regular</p>
                    </td>
                    <td>
                        <p class="mt">14 January 2021</p>
                    </td>
                    <td>
                        <p class="mt"> 17 October 2021</p>
                    </td>
                    <td><label for="" class="stat">Active</label></td>
                    <td>
                        <a class="btn ed" type="button" title="Edit" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Edit Service Package"><img src="../../ASSET/ICON/PACKAGE/353430_checkbox_pen_edit_pencil_icon.svg" class="edi"></a>
                        |
                        <a class="btn del" type="button" title="Delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="delt" data-bs-toggle="modal" data-bs-target="#delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mt">2</p>
                    </td>
                    <td>
                        <p class="mt">Fast</p>
                    </td>
                    <td>
                        <p class="mt">10 April 2021</p>
                    </td>
                    <td>
                        <p class="mt"> 17 October 2021</p>
                    </td>
                    <td><label for="" class="stat">Active</label></td>
                    <td>
                        <a class="btn ed" type="button" title="Edit" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Edit Service Package"><img src="../../ASSET/ICON/PACKAGE/353430_checkbox_pen_edit_pencil_icon.svg" class="edi"></a>
                        |
                        <a class="btn del" type="button" title="Delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="delt" data-bs-toggle="modal" data-bs-target="#delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mt">3</p>
                    </td>
                    <td>
                        <p class="mt">Super</p>
                    </td>
                    <td>
                        <p class="mt">24 August 2021</p>
                    </td>
                    <td>
                        <p class="mt"> 17 October 2021</p>
                    </td>
                    <td><label for="" class="stat">Active</label></td>
                    <td>
                        <a class="btn ed" type="button" title="Edit" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Edit Service Package"><img src="../../ASSET/ICON/PACKAGE/353430_checkbox_pen_edit_pencil_icon.svg" class="edi"></a>
                        |
                        <a class="btn del" type="button" title="Delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="delt" data-bs-toggle="modal" data-bs-target="#delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mt">4</p>
                    </td>
                    <td>
                        <p class="mt">Monster</p>
                    </td>
                    <td>
                        <p class="mt">18 February 2021</p>
                    </td>
                    <td>
                        <p class="mt"> 17 October 2021</p>
                    </td>
                    <td><label for="" class="stai">Non Active</label></td>
                    <td>
                        <a class="btn ed" type="button" title="Edit" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Edit Service Package"><img src="../../ASSET/ICON/PACKAGE/353430_checkbox_pen_edit_pencil_icon.svg" class="edi"></a>
                        |
                        <a class="btn del" type="button" title="Delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="delt" data-bs-toggle="modal" data-bs-target="#delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mt">5</p>
                    </td>
                    <td>
                        <p class="mt">Giant</p>
                    </td>
                    <td>
                        <p class="mt">05 July 2021</p>
                    </td>
                    <td>
                        <p class="mt"> 17 October 2021</p>
                    </td>
                    <td><label for="" class="stai">Non Active</label></td>
                    <td>
                        <a class="btn ed" type="button" title="Edit" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Edit Service Package"><img src="../../ASSET/ICON/PACKAGE/353430_checkbox_pen_edit_pencil_icon.svg" class="edi"></a>
                        |
                        <a class="btn del" type="button" title="Delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="delt" data-bs-toggle="modal" data-bs-target="#delete"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group bane" role="group" aria-label="Second group">
                <button type="button" class="btn dcv zza" disabled><img src="../../ASSET/ICON/PACKAGE/352072_arrow_play_icon - Edit.svg" class="arrow1"> Back
                </button>

                <button type="button" class="btn dcv" style="background-color: gray; color: white;">1</button>
                <button type="button" class="btn dcv">2</button>
                <button type="button" class="btn dcv">3</button>

                <button type="button" class="btn dcv zza">Next <img src="../../ASSET/ICON/PACKAGE/352072_arrow_play_icon.svg" class="arrow2">
                </button>
            </div>
        </div>
    </div>
</div>
<!-- DELETE -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_Throw_away_re_x60k.svg" alt="" class="mg mb-3">
                <p class="sus">Are you sure?</p>
                <p class="vn">You will not be able to recover this data!</p>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn bu" data-bs-toggle="modal" data-bs-target="#notifdelete">Yes</a>
                <button type="button" class="btn bu" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- //DELETE -->
<!-- NOTIF DELETE -->
<div class="modal fade" id="notifdelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="notifdeleteLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifdeleteLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_Done_re_oak4.svg" alt="" class="mg mb-3">
                <p class="sus">Done!</p>
                <p class="vn">Data deleted successfully</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bu" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- //NOTIF DELETE -->