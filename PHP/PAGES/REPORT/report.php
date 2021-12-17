<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>

<?php
include('../FUNCTIONS/function_package-customers.php');
$dataReport = showOrder("SELECT * FROM customers");
?>

<div class='row'>
    <div class="md-col-12">
        <div class="countainer count_data_report">
            <div class="row">
                <div class="col-1 receptacle_data_report" style="margin-left: 38px;">
                    <label class="label_data_report shadow">
                        <p class="txt_head_data_report">On process</p>
                        <h1 class="txt_real_data_report">03</h1>
                        <img class="img_data_report" src="../../ASSET/ICON/PACKAGE/iconmonstr-process-2.svg" alt="">
                        <p class="txt_powered_by_report">Powered by Laundry&trade;</p>
                    </label>
                </div>
                <div class="col-1 receptacle_data_report">
                    <label class="label_data_report shadow">
                        <p class="txt_head_data_report">Finished</p>
                        <h1 class="txt_real_data_report">01</h1>
                        <img class="img_data_report" src="../../ASSET/ICON/PACKAGE/iconmonstr-thumb-10.svg" alt="">
                        <p class="txt_powered_by_report">Powered by Laundry&trade;</p>
                    </label>
                </div>
                <div class="col-1 receptacle_data_report">
                    <label class="label_data_report shadow">
                        <p class="txt_head_data_report">Taken</p>
                        <h1 class="txt_real_data_report">01</h1>
                        <img class="img_data_report" src="../../ASSET/ICON/PACKAGE/iconmonstr-basket-18.svg" alt="">
                        <p class="txt_powered_by_report">Powered by Laundry&trade;</p>
                    </label>
                </div>
                <div class="col-1 receptacle_data_report">
                    <label class="label_data_report shadow">
                        <p class="txt_head_data_report">Customers</p>
                        <h1 class="txt_real_data_report">05</h1>
                        <img class="img_data_report" src="../../ASSET/ICON/PACKAGE/iconmonstr-customer-2.svg" alt="">
                        <p class="txt_powered_by_report">Powered by Laundry&trade;</p>
                    </label>
                </div>
                <div class="col-1">
                    <label class="label_data_report shadow">
                        <p class="txt_head_data_report">Profit</p>
                        <h1 class="txt_real_data_report_profit">IDR 201.000</h1>
                        <img class="img_data_report_profit" src="../../ASSET/ICON/PACKAGE/iconmonstr-banknote-15.svg" alt="">
                        <p class="txt_powered_by_report_profit">Powered by Laundry&trade;</p>
                    </label>
                </div>
            </div>
            <div class="shadow receptacle_data_table_report">
                <div class="row">
                    <div class="col-6">
                        <form class="d-flex form_search_data_table_reoprt">
                            <input class="form-control me-2 input_search_data_table_report" type="search" placeholder="Search data in the table" aria-label="Search">
                            <button class="btn btn_search_data_table_report" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-6">
                        <button class="btn btn_export_to_excel" type="button">Export to excel<img src="../../ASSET/ICON/PACKAGE/file-excel-2-fill.svg" class="img_export_to_excel"></button>
                    </div>
                </div>
                <table class="table table-bordered table_report table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Customers name</th>
                            <th>Customers id</th>
                            <th>Package name</th>
                            <th>Weight</th>
                            <th>Order</th>
                            <th>Finished process</th>
                            <th>Taken</th>
                            <th>Price already paid</th>
                            <th>Unpaid price</th>
                            <th>Price to pay</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataReport as $report) : ?>
                            <?php $i = 1; ?>

                            <tr>
                                <td>
                                    <p class="txt_data_table_report"><?php echo $i; ?></p>
                                </td>
                                <?php $i++; ?>
                                <td>
                                    <p class="txt_data_table_report">
                                        <?php echo $report["name_customers"]; ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">
                                        <?php echo $report["customers_id"]; ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">
                                        <?php echo $report["package_name"]; ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">
                                        <?php echo $report["weight"]; ?> Kg
                                    </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">
                                        <?php echo $report["order"]; ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">
                                        <?php echo $report["finished"]; ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">-</p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">IDR </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">IDR </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report">IDR </p>
                                </td>
                                <td>
                                    <p class="txt_data_table_report txt_data_status_taken">-</p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group receptacle_btn_next_or_back_report" role="group" aria-label="Second group">
                        <button type="button" class="btn extra_next_or_back_report btn_next_or_back_report" disabled><img src="../../ASSET/ICON/PACKAGE/bxs-left-arrow.svg" class="arrow_next_and_back_report"> Back
                        </button>

                        <button type="button" class="btn extra_next_or_back_report" style="background-color: gray; color: white;">1</button>
                        <button type="button" class="btn extra_next_or_back_report">2</button>
                        <button type="button" class="btn extra_next_or_back_report">3</button>

                        <button type="button" class="btn extra_next_or_back_report btn_next_or_back_report">Next <img src="../../ASSET/ICON/PACKAGE/bxs-right-arrow.svg" class="arrow_next_and_back_report">
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>