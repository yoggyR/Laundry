<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new password</title>
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
        <div class="row dek shadow">
            <div class="col-md-12">
                <form>
                    <h2 class="bia">Create new password</h2>
                    <img src="../../ASSET/ILLUSTRATION/undraw_Preferences_re_49in.svg" alt="" class="vl">
                    <p class="zn">Your new password must be different from previously used passwords.</p>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            required>
                        <label for="floatingPassword">Enter new password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            required>
                        <label for="floatingPassword">Confirm new password</label>
                    </div>
                    <a class="w-100 btn btn-lg sd" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Reset</a>
                    <p class="mt-2">Did you remember your password? <span><a class="ad"
                                href="../BEGINNING/log_in.php">Try logging in</a></span></p>
                    <p class="xw">&copy;2021 Laundry&trade;</p>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Laundry&trade;</h5>
                    </div>
                    <div class="modal-body">
                        <img src="../../ASSET/ILLUSTRATION/undraw_Done_re_oak4.svg" alt="" class="mg mb-3">
                        <p class="sus">Done!</p>
                        <p class="vn">Your password has been reset successfully</p>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-primary bu" href="../BEGINNING/log_in.php">Ok</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal -->
        <!-- LINK JAVASCRIPT -->
        <script src="../../JS/bootstrap.js"></script>
        <!-- /LINK JAVASCRIPT -->
</body>

</html>