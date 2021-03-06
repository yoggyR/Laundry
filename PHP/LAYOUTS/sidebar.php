<!-- SIDEBAR -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item mb-3">
                <a class="nav-link" href="main.php?page=Home" type="button" title="Home">
                    <img src="../../ASSET/ICON/FRONT/bxs-home.svg" alt="" class="img_home">
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link" href="main.php?page=Customers" type="button" title="Customers">
                    <img src="../../ASSET/ICON/FRONT/iconmonstr-user-31.svg" alt="" class="img_customers">
                </a>
            </li>
            <li class=" nav-item mb-3">
                <a class="nav-link" href="main.php?page=Package setting" type="button" title="Package setting">
                    <img src="../../ASSET/ICON/FRONT/bxs-box.svg" alt="" class="img_package_setting">
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link" href="main.php?page=Report" type="button" title="Report">
                    <img src="../../ASSET/ICON/FRONT/bxs-note.svg" alt="" class="img_report">
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Log out">
                    <img src="../../ASSET/ICON/FRONT/bxs-log-out-circle.svg" alt="" class="img_logout">
                </a>
            </li>
        </ul>
    </div>
    <p class="txt_copyright">&copy;2021 Laundry&trade;</p>
</nav>
<!-- //SIDEBAR -->

<!-- LOG OUT -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Laundry&trade;</h5>
            </div>
            <div class="modal-body">
                <img src="../../ASSET/ILLUSTRATION/undraw_cancel_u1it.svg" alt="" class="img_pop_up mb-3">
                <p class="txt_announcement">Come back soon!</p>
                <p class="txt_announcement_content">Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn_choice" href="../BEGINNING/log_out.php">Yes</a>
                <button type="button" class="btn btn_choice" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- //LOG OUT -->