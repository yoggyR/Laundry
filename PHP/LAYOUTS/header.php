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
    <header class="navbar sticky-top  flex-md-nowrap p-0">
        <a class="navbar-brand " type="button" data-bs-toggle="modal" data-bs-target="#about" title="About us">
            <img src="../../ASSET/LOGO/753105_washer_laundry_machine_wash_washing_icon-Edit.svg" class="img_logo">
        </a>

        <!-- <form class="d-flex form_search_head">
            <input class="form-control me-2 input_search" type="search" placeholder="Search for anything" aria-label="Search">
            <button class="btn btn_search " type="submit">Search</button>
        </form> -->

        <div title="Calendar" class="calendar_head">
                <img src="../../ASSET/ICON/FRONT/2102050_calendar_interface_year_icon.svg" class="img_calendar"> Today, <span style="font-weight: bold;">23 October 2021</span>
        </div>

        <!-- <a href=""><img src="../../ASSET/ICON/FRONT/352267_chat_icon.svg" alt="" class="img_chat"></a> -->

        <div class="dropdown btn_profile">
            <a class="btn dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../ASSET/FOTO/amir-seilsepour-5vg_SarQimA-unsplash.jpg" width="30" height="30" class="rounded-circle">
            </a>
            <ul class="dropdown-menu menu_profile" aria-labelledby="dropdownMenuLink">
                <li><label class="dropdown-item " style="font-weight: bold;">Hi, Amir Seilsepour</label></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item item_profile" href="main.php?page=My profile">My profile</a></li>
                <li><a class="dropdown-item item_profile" href="main.php?page=Edit profile">Edit profile</a></li>
                <li><a class="dropdown-item item_profile" href="main.php?page=Change password">Change password</a></li>
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
                    <h5 class="modal-title" id="aboutLabel">About us</h5>
                </div>
                <div class="modal-body">
                    <img src="../../ASSET/LOGO/753105_washer_laundry_machine_wash_washing_icon-Edit.svg" alt="" class="img_emblem">
                    <p class="txt_title">Laundry&trade;</p>
                    <p class="txt_description">Laundry&trade; was founded in 2021, and currently has spread throughout the territory
                        of the Republic of Indonesia. We Laundry&trade; have several months of washing experience.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn_choice" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //ABOUT -->