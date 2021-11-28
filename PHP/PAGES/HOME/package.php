<?php
if (!isset($_SESSION["email"])) {
    header("Location: ../../BEGINNING/log_in.php");
}
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Home</label>
    <label><span style="font-weight: bold; margin-left: -536px;"> / <?php echo ($pages); ?> </span></label><a href="main.php?page=Home" type="button" class="btn-close pa" title="Close this page"></a>
</div>
<div class="row pt-md-4">
    <div class="md-col-12">
        <div class="container border shadow pt-3" style="margin:auto; width: 930px;">
            <div class="row pt-2">
                <div class="col">
                    <img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" class="img_label_package"> <label class="label_package">Regular</label>
                </div>
                <div class="col" style="margin-left: 470px;">
                    <label class="txt_custumer_id_package">Customer id : <span style="font-weight: bold;">LNY-846291</span></label>
                </div>
            </div>
            <form class="row g-4 pt-4">
                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="name" class="form_label_package">Name</label>
                    <input type="text" class="form-control input_font_size" id="name" placeholder="Enter customer name">
                </div>

                <div class="col-md-3" style="margin-left: 23px;">
                    <label for="inputState" class="form_label_package">Level</label>
                    <select id="inputState" class="form-select input_font_size">
                        <option selected>Choose</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="weight" class="form_label_package">Weight</label>
                    <input type="text" class="form-control input_font_size" id="weight" placeholder="Laundry weight in kg">
                </div>

                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="phone" class="form_label_package">Phone number</label>
                    <input type="text" class="form-control input_font_size" id="phon" maxlength="13" placeholder="Enter phone number customer">
                </div>

                <div class="col-md-3" style="margin-left: 25px;">
                    <label for="Order Date" class="form_label_package">Order</label>
                    <input type="text" class="form-control input_font_size" id="Order Date" placeholder="<?php echo date('m/d/Y') ?>" disabled>
                </div>

                <div class="col-md-3">
                    <label for="finished process" class="form_label_package">Finished process</label>
                    <input type="date" class="form-control input_font_size" id="finished process">
                </div>

                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="address" class="form_label_package">Address</label>
                    <input type="text" class="form-control input_font_size" id="address" placeholder="Enter customer address">
                </div>

                <div class="col-md-6" style="margin-left: 25px;">
                    <label for="Note" class="form_label_package">Note</label>
                    <textarea class="form-control input_font_size" placeholder="Enter notes from customer" id="Note" style="height: 80px; width: 428px;"></textarea>
                </div>

                <div class="col-md-1 pt-2 pb-3" style="margin-left: 745px;">
                    <button type="button" class="btn btn_package_process" data-bs-toggle="modal" data-bs-target="#process"><img src="../../ASSET/ICON/PACKAGE/bxs-up-arrow-circle.svg" class="img_package_process">Process</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- NOTIF CHECK -->
<div class="modal fade" id="process" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="processLabel" aria-hidden="true" >
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="processLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
            <table class="table table-borderless" style="font-size: 12px; margin-top: 30px;">
                <tr>
                <th style="width: 300px;">Customer id</th>
                    <td style="width: 10px;">:</td>
                    <td style="width: 200px;">LNY-856309</td>
                    <th style="width: 500px;">Order</th>
                    <td style="width: 10px;">:</td>
                    <td style="width: 280px;">23-10-2021</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>:</td>
                    <td>Thornton</td>
                    <th>Finished process</th>
                    <td>:</td>
                    <td>27-10-2021</td>
                </tr>
                <tr>
                    <th>Phone number</th>
                    <td>:</td>
                    <td>0895801121100</td>
                    <th>Taken</th>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>:</td>
                    <td>Jl. Antasari, Kota Prabumulih</td>
                    <th>Price to pay</th>
                    <td>:</td>
                    <td>IDR 1.000.000</td>
                </tr>
                <tr>
                    <th>Package</th>
                    <td>:</td>
                    <td>Regular</td>
                    <th>Unpaid price</th>
                    <td>:</td>
                    <td>IDR 300.000</td>
                </tr>
                <tr>
                    <th>Level</th>
                    <td>:</td>
                    <td>1</td>
                    <th>Price already paid</th>
                    <td>:</td>
                    <td>IDR 700.000</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td>:</td>
                    <td>8 Kg</td>
                    <th>Pay hire</th>
                </tr>
                <tr>
                    <th colspan="3"></th>
                    <td colspan="3">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text cnpe_span" style="font-size: 11px;">IDR</span>
                            <input type="text" class="form-control" style="font-size: 11px;" placeholder="Enter the amount of money">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="6"></th>
                </tr>
            </table>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn_choice" data-bs-toggle="modal" data-bs-target="#notifcheck">Yes</a>
                <button type="button" class="btn btn_choice" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- //NOTIF CHECK -->

<!-- DONE ORDER -->
<div class="modal fade" id="notifcheck" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="notifcheckLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifcheckLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_Done_re_oak4.svg" alt="" class="img_pop_up mb-3">
                <p class="txt_announcement">Done!</p>
                <p class="txt_announcement_content">Order process successful</p>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn_choice" href="main.php?page=Home">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- //DONE ORDER -->