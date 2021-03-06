<?php
// if (!isset($_SESSION["customers_id"])) {
//     echo "
//             <script>
//                 document.location.href = 'main.php?page=Customers'; 
//             </script>";
// }
include('../FUNCTIONS/function_package-customers.php');
$dataOrder = showOrder("SELECT * FROM customers ORDER BY id DESC LIMIT 1");
?>
<?php foreach ($dataOrder as $order) : ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <label style="color: rgb(134, 133, 133);">Customers</label>
        <label><span style="font-weight: bold; margin-left: -520px;"> / <?php echo ($pages); ?> </span></label>
        <a href="main.php?page=Customers" type="button" class="btn-close pa" title="Close this page"></a>
    </div>

    <div class='row'>
        <div class="md-col-12">
            <div class="countainer border count_data_customers">
                <form action="" method="POST">
                    <table class="table table-borderless ms-3" style="width: auto;">
                        <tr>
                            <th class="pt-2">
                                <label for="" class="label_data_customers"><img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" class="img_data_customers"> Laundry&trade;</label>
                            </th>
                        </tr>
                        <tr>
                            <th>Customer id</th>
                            <td>:</td>
                            <td style="width: 300px;"><?php echo $order["customers_id"]; ?></td>
                            <th>Weight</th>
                            <td>:</td>
                            <td><?php echo $order["weight"]; ?> Kg</td>
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
                            <th>Package</th>
                            <td>:</td>
                            <td><?php echo $order["package_name"]; ?></td>
                            <th>Satus</th>
                            <td>:</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>Address</th>
                            <td>:</td>
                            <td rowspan="2"><?php echo $order["address"]; ?></td>
                            <th>Price to pay</th>
                            <td>:</td>
                            <td>IDR </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <th>Unpaid price</th>
                            <td>:</td>
                            <td>IDR </td>
                        </tr>
                        <tr>
                            <th>Note</th>
                            <td>:</td>
                            <td rowspan="2"><?php echo $order["note"]; ?></td>
                            <th>Price already paid</th>
                            <td>:</td>
                            <td>IDR </td>

                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <th>Pay hire</th>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text cnpe_span">IDR</span>
                                    <input type="text" name="pay_hire" class="form-control" id="idr" placeholder="Enter the amount of money">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                            <td>
                                <div class="">
                                    <a type="button" href="main.php?page=Data customers" name="done" class="btn btn_process_data_customers"><img src="../../ASSET/ICON/PACKAGE/iconmonstr-check-mark-7.svg" class="img_process_data_customers">Done</a>
                                </div>
                                <label class="label_taken visually-hidden">TAKEN 2021-12-20</label>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>