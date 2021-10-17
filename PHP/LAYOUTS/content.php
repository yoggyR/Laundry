<?php
$pages = isset($_GET['page']) ? $_GET['page'] : '';
?>
<!-- CONTENT -->
<main class="col-md-9 ms-sm-auto col-lg-11">

    <!-- PAGES -->
    <?php
    if ($pages == 'My Profile') {
        include('../PAGES/PROFILE/my_profile.php');
    } elseif ($pages == 'Edit Profile') {
        include('../PAGES/PROFILE/edit_profile.php');
    } elseif ($pages == 'Change Password') {
        include('../PAGES/PROFILE/change_password.php');
    } elseif ($pages == 'Home') {
        include('../PAGES/HOME/home.php');
    } elseif ($pages == 'Service Package') {
        include('../PAGES/HOME/service_package.php');
    }elseif ($pages == 'Customers') {
        include('../PAGES/CUSTOMERS/customers.php');
    } elseif ($pages == 'Controller') {
        include('../PAGES/SERVICE/controller.php');
    } elseif ($pages == 'Create New Service Package') {
        include('../PAGES/SERVICE/create_new_service_package.php');
    } elseif ($pages == 'Edit Service Package') {
        include('../PAGES/SERVICE/edit_service_package.php');
    } elseif ($pages == 'Report') {
        include('../PAGES/REPORT/report.php');
    } else {
        include('../PAGES/ANOTHER/not_found.php');
    }
    ?>
    <!-- //PAGES\\ -->

</main>
<!-- //CONTENT -->