<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Home</label>
    <label><span style="font-weight: bold; margin-left: -536px;"> / <?php echo ($pages); ?> </span></label><a href="main.php?page=Home" type="button" class="btn-close pa" title="Close this page"></a>
</div>
<div class='row'>
    <div class="md-col-12">
        <div class="container border shadow" style="width: 900px;">
            <div class="row pt-2">
                <div class="col">
                    <img src="../../ASSET/ICON/PACKAGE/753105_washer_laundry_machine_wash_washing_icon - Copy.svg" class="img_label_package"> <label class="label_package">Regular</label>
                </div>
                <div class="col" style="margin-left: 435px;">
                    <label class="txt_custumer_id_package">Customer id : <span style="font-weight: bold;">LNY-846291</span></label>
                </div>
            </div>
            <form class="row g-4 pt-4">
                <div class="col-md-4" style="margin-left: 25px;">
                    <label for="name" class="form-label_package">Name</label>
                    <input type="text" class="form-control input_font_size" id="name" placeholder="Enter customer name">
                </div>

                <div class="col-md-3" style="margin-left: 23px;">
                    <label for="inputState" class="form-label_package">Level</label>
                    <select id="inputState" class="form-select input_font_size">
                        <option selected>Choose</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="weight" class="form-label_package">Weight</label>
                    <input type="text" class="form-control input_font_size" id="weight" placeholder="Laundry weight in kg">
                </div>

                <div class="col-md-4" style="margin-left: 25px;">
                    <label for="phone" class="form-label_package">Phone number</label>
                    <input type="text" class="form-control input_font_size" id="phon" maxlength="13" placeholder="Enter phone number customer">
                </div>

                <div class="col-md-3" style="margin-left: 23px;">
                    <label for="Order Date" class="form-label_package">Price already paid</label>
                    <input type="text" class="form-control input_font_size" id="Order Date" placeholder="IDR">
                </div>

                <div class="col-md-2">
                    <label for="Order Date" class="form-label_package">Unpaid price</label>
                    <input type="text" class="form-control input_font_size" id="Order Date" placeholder="IDR 50. 000" disabled>
                </div>

                <div class="col-md-2">
                    <label for="Pick Up Date" class="form-label_package">Price to pay</label>
                    <input type="text" class="form-control input_font_size" id="Pick Up Date" placeholder="IDR 50.000" disabled>
                </div>

                <div class="col-md-4" style="margin-left: 25px;">
                    <label for="address" class="form-label_package">Address</label>
                    <input type="text" class="form-control input_font_size" id="address" placeholder="Enter customer address">
                </div>

                <div class="col-md-2" style="margin-left: 23px;">
                    <label for="Order Date" class="form-label_package">Order</label>
                    <input type="text" class="form-control input_font_size" id="Order Date" placeholder="23-10-2021" disabled>
                </div>

                <div class="col-md-5">
                    <label for="Finished Process" class="form-label_package">Finished process</label>
                    <div class="row">
                        <div class="col">
                            <select id="Finished Process" class="form-select input_font_size">
                                <option selected>27</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="Finished Process" class="form-select input_font_size">
                                <option selected>10</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="Finished Process" class="form-select input_font_size">
                                <option selected>2021</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-left: 25px;">
                    <label for="Note" class="form-label_package">Note</label>
                    <textarea class="form-control input_font_size" placeholder="Enter notes from customer" id="Note" style="height: 80px; width: 801px;"></textarea>
                </div>

                <div class="col-md-1" style="margin-left: 743px;">
                    <button type="button" class="btn btn_package_process" data-bs-toggle="modal" data-bs-target="#process">Process</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- NOTIF CHECK -->
<div class="modal fade" id="process" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="processLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="processLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_Notify_re_65on.svg" alt="" class="img_pop_up mb-3">
                <p class="txt_announcement">warning!</p>
                <p class="txt_announcement_content">Is the data entered correctly?</p>
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