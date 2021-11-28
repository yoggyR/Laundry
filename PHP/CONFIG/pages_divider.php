<!-- Pages divider -->
<?php

$pages = isset($_GET['page']) ? $_GET['page'] : '';

// ==Beginning==
// My profile
if ($pages == 'My profile') {
    include('../PAGES/PROFILE/my_profile.php');
}
// End my profile \\

// Edit profile
elseif ($pages == 'Edit profile') {
    include('../PAGES/PROFILE/edit_profile.php');
}
// End edit profile \\

// Change password
elseif ($pages == 'Change password') {
    include('../PAGES/PROFILE/change_password.php');
}
// End change password \\
// ==End beginning==


// ==Pages==
// Home 
elseif ($pages == 'Home') {
    include('../PAGES/HOME/home.php');
} elseif ($pages == 'Package') {
    include('../PAGES/HOME/package.php');
}
// End home \\

// Customers
elseif ($pages == 'Customers') {
    include('../PAGES/DATA_CUSTOMERS/customers.php');
} elseif ($pages == 'Data customers') {
    include('../PAGES/DATA_CUSTOMERS/data.php');
}
// End customers \\

// Package setting
elseif ($pages == 'Package setting') {
    include('../PAGES/PACKAGE_SETTING/package_setting.php');
} elseif ($pages == 'Create new package') {
    include('../PAGES/PACKAGE_SETTING/create_new_package.php');
} elseif ($pages == 'Edit package') {
    include('../PAGES/PACKAGE_SETTING/edit_package.php');
}elseif ($pages == 'delete') {
    include('../PAGES/PACKAGE_SETTING/delete_package.php');
}
// End package setting \\

// Report
elseif ($pages == 'Report') {
    include('../PAGES/REPORT/report.php');
}
// End report \\

// Another
else {
    include('../PAGES/ANOTHER/not_found.php');
}
// End another \\
// ==End pages==

?>
<!-- //Pages divider\\ -->