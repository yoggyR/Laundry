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
    return($box);
}
// My profile \\
// =======================================
// Edit profile
function edit($profilUser)
{
    global $connect;
    $id             = $profilUser['id'];
    $name           = htmlspecialchars($profilUser['name']);
    $email          = htmlspecialchars($profilUser['email']);
    $phone_number   = htmlspecialchars($profilUser['phone_number']);
    $address        = htmlspecialchars($profilUser['address']);

    mysqli_query($connect, "UPDATE user SET name='$name', email='$email', phone_number='$phone_number', address='$address' WHERE id='$id'");
    return mysqli_affected_rows($connect);
}
// Edit profile \\
// =======================================
// Change password


// Change password \\
