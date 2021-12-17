<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <label style="color: rgb(134, 133, 133);">Home</label>
    <label>
        <span style="font-weight: bold; margin-left: -536px;"> / <?php echo ($pages); ?></span>
    </label>
    <a href="main.php?page=Home" type="button" class="btn-close pa" title="Close this page"></a>
</div>

<?php
include('../FUNCTIONS/function_package-setting.php');
include('../FUNCTIONS/function_package-customers.php');
$id                 = $_GET['id'];
$customerPackage    = show("SELECT * FROM package_setting WHERE id = $id")[0];
$customer_id        = mt_rand(100000, 999999);

if (isset($_POST["process"])) {
    $price = ($_POST["weight"] * $customerPackage["price_per_kg"]);
    echo '<form action="" method="POST"><input type="text" name="price_to_pay" value="' . $price . '"></form>';
    if (addOrder($_POST) > 0) {
        // echo "
        //     <script>
        //         Swal.fire('Any fool can use a computer');
        //         document.location.href = 'main.php?page=Order process'; 
        //     </script>";
    } else {
        echo "
            <script>
                alert ('Failed');
            </script>";
    }
}
?>

<div class="row">
    <div class="md-col-12 pt-4">
        <div class="container border pt-3" style="margin:auto; width: 930px;">
            <div class="row pt-2">
                <div class="col ms-4">
                    <img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" class="img_label_package"> <label class="label_package"> Laundry&trade;</label>
                </div>
                <div class="col" style="margin-left: 500px;">
                    <label class="txt_custumer_id_package">Package : <span style="font-weight: bold;"><?php echo $customerPackage["name_packages"]; ?></span></label>
                </div>
            </div>

            <form class="row g-4 pt-4" action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $customerPackage["id"]; ?>">
                <input type="hidden" name="package_name" value="<?php echo $customerPackage["name_packages"]; ?>">
                <input type="hidden" name="customers_id" value="LNY-<?php echo $customer_id; ?>">
                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="name" class="form_label_package">Name</label>
                    <input type="text" name="name_customers" class="form-control input_font_size" id="name" placeholder="Enter customer name" autocomplete="off">
                </div>

                <div class="col-md-3" style="margin-left: 23px;">
                    <label for="Customer id" class="form_label_package">Customer id</label>
                    <input type="text" name="customers_id" class="form-control input_font_size" id="Customer id" value="LNY-<?php echo $customer_id; ?>" disabled>
                </div>

                <div class="col-md-3">
                    <label for="weight" class="form_label_package">Weight <span style="margin-left: 50px; font-weight:lighter;">Min <?php echo $customerPackage["min_weight"]; ?> Kg - Max <?php echo $customerPackage["max_weight"]; ?> Kg</span></label>
                    <input type="text" name="weight" class="form-control input_font_size" id="weight" placeholder="Laundry weight in kg" autocomplete="off">
                </div>

                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="phone" class="form_label_package">Phone number</label>
                    <input type="text" name="phone_number" class="form-control input_font_size" id="phon" maxlength="13" placeholder="Enter phone number customer" autocomplete="off">
                </div>

                <div class="col-md-3" style="margin-left: 25px;">
                    <label for="Order Date" class="form_label_package">Order</label>
                    <input type="text" name="order" class="form-control input_font_size" id="Order Date" value="<?php echo date('m/d/Y'); ?>" disabled>
                </div>

                <div class="col-md-3">
                    <label for="finished process" class="form_label_package">Finished process</label>
                    <input type="text" name="finished" class="form-control input_font_size" id="datepicker" placeholder="<?php echo date('m/d/Y'); ?>">
                </div>

                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="address" class="form_label_package">Address</label>
                    <input type="text" name="address" class="form-control input_font_size" id="address" placeholder="Enter customer address" autocomplete="off">
                </div>

                <div class="col-md-6" style="margin-left: 25px;">
                    <label for="Note" class="form_label_package">Note</label>
                    <textarea name="note" class="form-control input_font_size" placeholder="Enter notes from customer" id="Note" style="height: 80px; width: 428px;" autocomplete="off"></textarea>
                </div>

                <div class="col-md-1 pt-2 pb-3" style="margin-left: 745px;">
                    <button type="submit" name="process" class="btn btn_package_process"><img src="../../ASSET/ICON/PACKAGE/bxs-up-arrow-circle.svg" class="img_package_process">Process</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- NOTIF CHECK -->
<!-- <div class="modal fade" id="process" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="processLabel" aria-hidden="true">
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
</div> -->
<!-- //NOTIF CHECK -->

<!-- DONE ORDER -->
<!-- <div class="modal fade" id="notifcheck" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="notifcheckLabel" aria-hidden="true">
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
</div> -->
<!-- //DONE ORDER -->