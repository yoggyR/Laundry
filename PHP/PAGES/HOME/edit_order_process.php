<?php
include('../FUNCTIONS/function_package-customers.php');
$id                     = $_GET['id'];
$editCustomerOrder      = showOrder("SELECT * FROM customers WHERE id = $id")[0];
if (isset($_POST['process'])) {
    if (editOrder($_POST) >= 0) {
        echo "
            <script>
                document.location.href = 'main.php?page=Order process';
            </script>";
    } else {
        echo "
            <script>
                alert ('Failed');
            </script>";
    }
}
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <label for="" style="color: rgb(134, 133, 133);">Home</label>
    <label><span style="font-weight: bold; margin-left: -536px;"> / Package </span></label>
    <a href="main.php?page=delete_order&id=<?php echo $editCustomerOrder['id']; ?>" type="button" class="btn-close pa" title="Close this page"></a>
</div>

<div class="row pt-md-4">
    <div class="md-col-12">
        <div class="container border shadow pt-3" style="margin:auto; width: 930px;">
            <div class="row pt-2">
                <div class="col">
                    <img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" class="img_label_package"> <label class="label_package"><?php echo $editCustomerOrder["package_name"]; ?></label>
                </div>
                <div class="col" style="margin-left: 470px;">
                    <label class="txt_custumer_id_package">Customer id : <span style="font-weight: bold;"><?php echo $editCustomerOrder["customers_id"]; ?></span></label>
                </div>
            </div>
            <form class="row g-4 pt-4" action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $editCustomerOrder["id"]; ?>">
                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="name" class="form_label_package">Name</label>
                    <input type="text" name="name_customers" class="form-control input_font_size" id="name" placeholder="Enter customer name" autocomplete="off" value="<?php echo $editCustomerOrder["name_customers"]; ?>">
                </div>

                <div class="col-md-3" style="margin-left: 23px;">
                    <label for="inputState" class="form_label_package">Level</label>
                    <select id="inputState" name="level" class="form-select input_font_size">
                        <option selected>Choose</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="weight" class="form_label_package">Weight</label>
                    <input type="text" name="weight" class="form-control input_font_size" id="weight" placeholder="Laundry weight in kg" autocomplete="off" value="<?php echo $editCustomerOrder["weight"]; ?>">
                </div>

                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="phone" class="form_label_package">Phone number</label>
                    <input type="text" name="phone_number" class="form-control input_font_size" id="phon" maxlength="13" placeholder="Enter phone number customer" autocomplete="off" value="<?php echo $editCustomerOrder["phone_number"]; ?>">
                </div>

                <div class="col-md-3" style="margin-left: 25px;">
                    <label for="Order Date" class="form_label_package">Order</label>
                    <input type="text" name="order" class="form-control input_font_size" id="Order Date" value="<?php echo $editCustomerOrder["order"]; ?>" disabled>
                </div>

                <div class="col-md-3">
                    <label for="finished process" class="form_label_package">Finished process</label>
                    <input type="date" name="finished" class="form-control input_font_size" id="finished process">
                </div>

                <div class="col-md-5" style="margin-left: 25px;">
                    <label for="address" class="form_label_package">Address</label>
                    <input type="text" name="address" class="form-control input_font_size" id="address" placeholder="Enter customer address" autocomplete="off" value="<?php echo $editCustomerOrder["address"]; ?>">
                </div>

                <div class="col-md-6" style="margin-left: 25px;">
                    <label for="Note" class="form_label_package">Note</label>
                    <textarea name="note" class="form-control input_font_size" placeholder="Enter notes from customer" id="Note" style="height: 80px; width: 428px;" autocomplete="off"><?php echo $editCustomerOrder["note"]; ?></textarea>
                </div>

                <div class="col-md-1 pt-2 pb-3" style="margin-left: 745px;">
                    <button type="submit" name="process" class="btn btn_package_process"><img src="../../ASSET/ICON/PACKAGE/bxs-up-arrow-circle.svg" class="img_package_process">Process</button>
                </div>
            </form>
        </div>
    </div>
</div>