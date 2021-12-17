<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <label><span style="font-weight: bold;"> <?php echo ($pages); ?> </span></label>
</div>

<?php
include('../CONFIG/connect_database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['keyword'])) {
        $keyword    = htmlspecialchars($_POST['keyword']);
        $query      = "SELECT * FROM customers WHERE customers_id = '" . $keyword . "'";
        $result     = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $dataUser = mysqli_fetch_assoc($result);
        } else {
            echo "
            <script>
            document.location.href = 'main.php?page=Customers'; 
            </script>";
        }

        mysqli_close($connect);

        if ($keyword == $dataUser['customers_id']) {
            $_SESSION['keyword'] = $dataUser['customers_id'];
            echo "
            <script>
                document.location.href = 'main.php?page=Data customers'; 
            </script>";
        } else {
            echo "
            <script>
            document.location.href = 'main.php?page=Customers'; 
            </script>";
        }
    }
}
?>

<div class='row'>
    <div class="md-col-12">
        <div class="container">
            <div class="row receptacle_customers">
                <div class="col-md-5">
                    <h1 class="txt_title_customers">Find</h1>
                    <h1 class="txt_title_customers_different_colour">Data</h1>
                    <h1 class="txt_title_customers mb-4">Customers</h1>
                    <form action="" method="POST">
                        <div class="mb-2">
                            <input type="text" class="form-control form_search_customers_id" maxlength="10" placeholder="Customers id" autocomplete="off" name="keyword">
                        </div>
                        <p class="txt_notif_customers_id">Enter just 10 character customers id</p>
                        <button class="btn btn-lg btn_search_customers_id" type="submit" name="search"><span class="txt_btn_search_customers_id">Search now</span></button>
                    </form>
                </div>
                <div class="col-md-5">
                    <img src="../../ASSET/ILLUSTRATION/undraw_No_data_re_kwbl.svg" class="img_customers_ilustration">
                </div>
            </div>
        </div>
    </div>
</div>