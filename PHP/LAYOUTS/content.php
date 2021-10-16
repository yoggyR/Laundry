<?php
$pages = isset($_GET['page']) ? $_GET['page'] : '';
?>
<!-- CONTENT -->
<main class="col-md-9 ms-sm-auto col-lg-11">

    <!-- PAGES -->
    <?php
    if ($pages == 'My Profile') {
        include('../PAGES/my_profile.php');
    } elseif ($pages == 'Edit Profile') {
        include('../PAGES/edit_profile.php');
    } elseif ($pages == 'Change Password') {
        include('../PAGES/change_password.php');
    } elseif ($pages == 'Home') {
        include('../PAGES/home.php');
    } elseif ($pages == 'Customers') {
        include('../PAGES/customers.php');
    } elseif ($pages == 'Service Packages Controller') {
        include('../PAGES/service_packages.php');
    } elseif ($pages == 'Report') {
        include('../PAGES/report.php');
    } else {
        include('../PAGES/not_found.php');
    }
    ?>
    <!-- //PAGES\\ -->

</main>
<!-- //CONTENT -->