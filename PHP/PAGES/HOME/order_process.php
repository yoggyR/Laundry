<?php
include('../FUNCTIONS/function_package-customers.php');
$dataOrder = showOrder("SELECT * FROM customers ORDER BY id DESC LIMIT 1 ");
?>
<?php foreach ($dataOrder as $order) : ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
        <a href="main.php?page=delete_order&id=<?php echo $order['id']; ?>" type="button" class="btn-close pa" title="Close this page"></a>
    </div>

    <div class='row'>
        <div class="md-col-12 pt-4">
            <div class="countainer border count_order_process ">
                <form action="" method="POST">
                    <table class="table table-borderless ms-3" style="width: auto;">
                        <tr>
                            <th class="pt-4"><label for="" class="label_order_process"><img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" class="img_order_process"> Laundry&trade;</label></th>
                        </tr>
                        <tr>
                            <th>Customer id</th>
                            <td>:</td>
                            <td style="width: 300px;"><?php echo $order["customers_id"]; ?></td>

                            <th>Package</th>
                            <td>:</td>
                            <td><?php echo $order["package_name"]; ?></td>

                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>:</td>
                            <td><?php echo $order["name_customers"]; ?></td>

                            <th>Order</th>
                            <td>:</td>
                            <td><?php echo $order["order"]; ?></td>

                        </tr>
                        <tr>
                            <th>Phone number</th>
                            <td>:</td>
                            <td><?php echo $order["phone_number"]; ?></td>

                            <th>Finished process</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>:</td>
                            <td rowspan="2"><?php echo $order["address"]; ?></td>
                            <th>Weight</th>
                            <td>:</td>
                            <td><?php echo $order["weight"]; ?> Kg</td>

                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <th>Price to pay</th>
                            <td>:</td>
                            <td>IDR <?php echo $order["price_to_pay"]; ?></td>
                        </tr>
                        <tr>
                            <th>Note</th>
                            <td>:</td>
                            <td rowspan="2"><?php echo $order["note"]; ?></td>
                            <th>Pay hire</th>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="3">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">IDR</span>
                                    <input type="text" name="pay_hire" class="form-control" id="idr" placeholder="Enter the amount of money">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td class="pb-3">
                                <a type="button" href="main.php?page=Data customers" name="done" class="btn btn_process_order_done"><img src="../../ASSET/ICON/PACKAGE/iconmonstr-check-mark-7.svg" class="img_process_order_done">Done</a>
                            </td>
                            <td></td>
                            <td class="pb-3">
                                <a type="button" href="main.php?page=edit_order&id=<?php echo $order['id']; ?>" class="btn btn_process_order_cancel"><img src="../../ASSET/ICON/PACKAGE/bxs-edit.svg" class="img_process_order_cancel">Edit</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>