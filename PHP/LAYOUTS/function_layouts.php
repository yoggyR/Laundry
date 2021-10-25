<!-- Grab and show page -->
<?php

$pages = isset($_GET['page']) ? $_GET['page'] : '';

// ==Beginning==
// My profile
if ($pages == 'My Profile') {
    include('../PAGES/PROFILE/my_profile.php');
}
// End my profile

// Edit profile
elseif ($pages == 'Edit Profile') {
    include('../PAGES/PROFILE/edit_profile.php');
}
// End edit profile

// Change password
elseif ($pages == 'Change Password') {
    include('../PAGES/PROFILE/change_password.php');
}
// End change password
// ==End beginning==


// ==Pages==
// Home
elseif ($pages == 'Home') {
    include('../PAGES/HOME/home.php');
} elseif ($pages == 'Package') {
    include('../PAGES/HOME/package.php');
}elseif ($pages == 'Sub_Package') {
    include('../PAGES/HOME/sub_package.php');
}
// End home

// Customers
elseif ($pages == 'Data Customers') {
    include('../PAGES/DATA_CUSTOMERS/customers.php');
}elseif ($pages == 'data') {
    include('../PAGES/DATA_CUSTOMERS/data.php');
}
// End customers

// Package setting
elseif ($pages == 'Package Setting') {
    include('../PAGES/PACKAGE_SETTING/package_setting.php');
} elseif ($pages == 'Create New Package') {
    include('../PAGES/PACKAGE_SETTING/create_new_package.php');
} elseif ($pages == 'Edit Package') {
    include('../PAGES/PACKAGE_SETTING/edit_package.php');
}
// End package setting

// Report
elseif ($pages == 'Report') {
    include('../PAGES/REPORT/report.php');
}
// End report

// Another
else {
    include('../PAGES/ANOTHER/not_found.php');
}
// End another
// ==End pages==

?>
<!-- //Grab and show page\\ -->