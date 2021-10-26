<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to Laundry&trade;</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/beginning.css">
    <!-- /LINK CSS -->
    <!-- LINK LOGO -->
    <link rel="shortcut icon" href="../../ASSET/LOGO/g839.png">
    <!-- /LINK LOGO -->
</head>

<body>
    <div class="countainer">
        <div class="row receptacle_login shadow">
            <div class="col-md-6">
                <img src="../../ASSET/FOTO/alexandra-poliakova-EXCroywwrEw-unsplash.jpg" class="img-fluid img_washing_machine">
            </div>
            <div class="col-md-6">
                <form class="form_login">
                    <img class="mb-4 img_logo_login" src="../../ASSET/LOGO/753105_washer_laundry_machine_wash_washing_icon-Edit.svg">
                    <h2 class="txt_label_login">Laundry&trade;</h2>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-2">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <a class="w-100 btn btn-lg btn_login mb-2" type="submit" href="../../PHP/LAYOUTS/main.php">Log in</a>
                    <a class="btn_forgot_password" href="../BEGINNING/forgot_password.php">Forgot password?</a>
                    <p class="txt_copyright_login">&copy;2021 Laundry&trade;</p>
                </form>
            </div>
        </div>
        <!-- LINK JAVASCRIPT -->
        <script src="../../JS/bootstrap.js"></script>
        <!-- /LINK JAVASCRIPT -->
</body>

</html>