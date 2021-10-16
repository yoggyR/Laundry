<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry&trade;</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/layout.css">
    <link rel="stylesheet" href="../../CSS/page.css">
    <!-- /LINK CSS -->
    <!-- LINK LOGO -->
    <link rel="shortcut icon" href="../../ASSET/LOGO/g839.png">
    <!-- /LINK LOGO -->
</head>

<body>
    <!-- HEADER -->
    <header class="navbar sticky-top  flex-md-nowrap p-0 he">
        <a class="navbar-brand " type="button" data-bs-toggle="modal" data-bs-target="#about" title="About Us Laundry&trade;">
            <img src="../../ASSET/LOGO/753105_washer_laundry_machine_wash_washing_icon-Edit.svg" class="logo">
        </a>

        <form class="d-flex sc">
            <input class="form-control me-2 sct" type="search" placeholder="Search for anything" aria-label="Search">
            <button class="btn sct sa " type="submit">Search</button>
        </form>

        <div class="dropdown cal" title="Calendar">
            <a class="btn dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../ASSET/ICON/FRONT/2102050_calendar_interface_year_icon.svg" class="kal"> Today, <span style="font-weight: bold;">October 16</span>
            </a>

        </div>

        <a href=""><img src="../../ASSET/ICON/FRONT/4964018_alarm_alert_attention_bell_notification_icon.svg" alt="" class="not"></a>

        <div class="dropdown wm">
            <a class="btn dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../ASSET/FOTO/amir-seilsepour-5vg_SarQimA-unsplash.jpg" width="30" height="30" class="rounded-circle">
            </a>
            <ul class="dropdown-menu men" aria-labelledby="dropdownMenuLink">
                <li><label class="dropdown-item " style="font-weight: bold;">Hi, Amir Seilsepour</label></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item z" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=My Profile">My Profile</a></li>
                <li><a class="dropdown-item z" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Edit Profile">Edit Profile</a></li>
                <li><a class="dropdown-item z" href="/PHP/PROJECT/Laundry/PHP/LAYOUTS/main.php?page=Change Password">Change Password</a></li>
                </li>
            </ul>
        </div>
    </header>
    <!-- //HEADER// -->
    <!-- ABOUT -->
    <div class="modal fade" id="about" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="aboutLabel" aria-hidden="true">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutLabel">About Us</h5>
                </div>
                <div class="modal-body">
                    <img src="../../ASSET/LOGO/753105_washer_laundry_machine_wash_washing_icon-Edit.svg" alt="" class="ma">
                    <p class="sws">Laundry&trade;</p>
                    <p class="vx">Laundry&trade; was founded in 2021, and currently has spread throughout the territory
                        of the Republic of Indonesia. We Laundry&trade; have experience in washing all kinds of clothes.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bu" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //ABOUT -->