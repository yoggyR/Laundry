<?php
// Connect
include('../CONFIG/connect_database.php');
// Connect \\
// =======================================
// My profile
function show($operation)
{
    global $connect;
    $result = mysqli_query($connect, $operation);
    $box = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $box[] = $data;
    }
    return $box;
}

// My profile \\
// =======================================
// Edit profile
function edit($profilUser)
{
    global $connect;
    $id           = $profilUser['id'];
    $name         = htmlspecialchars($profilUser['name']);
    $email        = htmlspecialchars($profilUser['email']);
    $phone_number = htmlspecialchars($profilUser['phone_number']);
    $address      = htmlspecialchars($profilUser['address']);
    $oldImage     = $profilUser['oldImage'];

    if ($_FILES['image']['error'] === 4) {
        $image    = $oldImage;
    } else {
        $image    = changeImage();
    }

    mysqli_query($connect, "UPDATE  user 
                            SET     name         ='$name', 
                                    email        ='$email', 
                                    phone_number ='$phone_number', 
                                    address      ='$address',
                                    image        ='$image'
                            WHERE   id           ='$id'");
    return mysqli_affected_rows($connect);
}

function changeImage()
{
    $nameImage    = $_FILES['image']['name'];
    $folderName   = $_FILES['image']['tmp_name'];

    $imageExtensionvalidation = ['jpg', 'jpeg', 'png', 'svg'];
    $extensionImage           = explode('.', $nameImage);
    $extensionImage           = strtolower(end($extensionImage));

    if (!in_array($extensionImage, $imageExtensionvalidation)) {
        echo "  <script>
                    alert ('Please only include images with jpg, jpeg, or png extensions !!!');
                </script>";
        return false;
    }

    move_uploaded_file($folderName, '../../DATABASE/IMAGE/' . $nameImage);
    return $nameImage;
}
// Edit profile \\
// =======================================
// Change password


// Change password \\
