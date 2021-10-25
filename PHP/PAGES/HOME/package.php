<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Home</label>
    <label><span style="font-weight: bold; margin-left: -535px;"> / <?php echo ($pages); ?> </span></label><a href="main.php?page=Home" type="button" class="btn-close pa" title="Close this page"></a>
</div>
<div class='row'>
    <div class="md-col-12">
        <div class="container border" style="width: 800px;">
            <div class="row pt-3">
                <div class="col">
                    <img src="../../ASSET/ICON/PACKAGE/753105_washer_laundry_machine_wash_washing_icon - Copy.svg" class="img_label_package_and_subpackage"> <label class="label_package_and_subpackage">Regular</label>
                </div>
                <div class="col" style="margin-left: 330px;">
                    <label class="txt_custumer_id_package_and_subpackage">Customer Id : <span style="font-weight: bold;">LNY-846291</span></label>
                </div>
            </div>
            <form class="row g-4 pt-5">

                <div class="col-md-5" style="margin-left: 20px;">
                    <label for="name" class="form-label_package_and_subpackage">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Customer Name">
                </div>

                <div class="col-md-3" style="margin-left: 22px;">
                    <label for="inputState" class="form-label_package_and_subpackage">Level</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="weight" class="form-label_package_and_subpackage">Weight</label>
                    <input type="text" class="form-control" id="weight" placeholder="Kg">
                </div>

                <div class="col-md-5" style="margin-left: 20px;">
                    <label for="phone" class="form-label_package_and_subpackage">Phone Number</label>
                    <input type="text" class="form-control" id="phon" maxlength="13" placeholder="Enter Phone Number Customer">
                </div>

                <div class="col-md-3" style="margin-left: 22px;">
                    <label for="Order Date" class="form-label_package_and_subpackage">Order</label>
                    <input type="text" class="form-control" id="Order Date" placeholder="23-10-2021" disabled>
                </div>

                <div class="col-md-3">
                    <label for="Pick Up Date" class="form-label_package_and_subpackage">Finished Process</label>
                    <input type="text" class="form-control" id="Pick Up Date" placeholder="27-10-2021" disabled>
                </div>

                <div class="col-md-5" style="margin-left: 20px;">
                    <label for="address" class="form-label_package_and_subpackage">Address</label>
                    <textarea class="form-control" placeholder="Enter Address Customer" id="address" style="height: 28px"></textarea>
                </div>

                <div class="col-md-6" style="margin-left: 22px;">
                    <label for="Note" class="form-label_package_and_subpackage">Note</label>
                    <textarea class="form-control" placeholder="Enter notes from customer" id="Note" style="height: 100px;"></textarea>
                </div>

                <div class="col-4 pb-3" style="margin-left: 640px;">
                    <a type="button" class="btn btn_package_process" href="main.php?page=Sub_Package">Process</a>
                </div>
            </form>
        </div>



    </div>
</div>