<?php
session_start();
if (isset($_COOKIE['login']) && !isset($_SESSION['email'])) {
    $_SESSION['email'] = $_COOKIE['login'];
}
else if (!isset($_SESSION["email"])) {
    header("Location: ../BEGINNING/log_in.php");
}

include('../CONFIG/connect_database.php');
$query = "SELECT * FROM user";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_assoc($result);
?>
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
    <link rel="shortcut icon" href="../../ASSET/LOGO/johnny-automatic-Services-5.svg">
    <!-- /LINK LOGO -->
</head>

<body>
    <!-- HEADER -->
    <header class="navbar sticky-top  flex-md-nowrap p-0">
        <a class="navbar-brand" type="button" data-bs-toggle="modal" data-bs-target="#about" title="About us">
            <img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" class="img_logo">
        </a>

        <div title="Date" class="date_head">
            <img src="../../ASSET/ICON/PACKAGE/bxs-calendar.svg" class="img_calendar"> Today, <span style="font-weight: bold; color: #30397E;"><?php echo date('d-M-Y'); ?></span>
        </div>

        <div class="btn_profile" title="My profile">
            <label>Hi, <?php echo $data["name"]; ?></label>
            <a type="button" class="btn" href="main.php?page=My profile">
                <img src="../../DATABASE/IMAGE/<?php echo $data["image"]; ?>" width="30" height="30" class="rounded-circle img_header_profile">
            </a>
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
                    <img src="../../ASSET/LOGO/johnny-automatic-Services-5.svg" alt="" class="img_emblem">
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