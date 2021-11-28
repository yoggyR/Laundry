<?php
// Connect
include('../CONFIG/connect_database.php');
// Connect \\

// Package setting
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
// Package setting \\

// Create new package
function add($add)
{

    global $connect;

    $name_packages          = htmlspecialchars($add['name_packages']);
    $date_created           = htmlspecialchars($add['date_created']);
    $status                 = htmlspecialchars($add['status']);
    $price_per_kg           = htmlspecialchars($add['price_per_kg']);
    $min_weight             = htmlspecialchars($add['min_weight']);
    $max_weight             = htmlspecialchars($add['max_weight']);
    $processing_time        = htmlspecialchars($add['processing_time']);
    $level_1                = htmlspecialchars($add['level_1']);

    mysqli_query($connect, "INSERT INTO package_setting 
                                VALUES  ('', 
                                        '$name_packages', 
                                        '$date_created',
                                        '$date_modified',
                                        '$status', 
                                        '$price_per_kg', 
                                        '$min_weight', 
                                        '$max_weight', 
                                        '$processing_time', 
                                        '$level_1')");

    return mysqli_affected_rows($connect);
}
// Create new package \\

// Edit package
function edit($edit)
{

    global $connect;

    $id                     = htmlspecialchars($edit['id']);
    $date_created           = htmlspecialchars($edit['date_created']);
    $name_packages          = htmlspecialchars($edit['name_packages']);
    $date_modified          = htmlspecialchars($edit['date_modified']);
    $status                 = htmlspecialchars($edit['status']);
    $price_per_kg           = htmlspecialchars($edit['price_per_kg']);
    $min_weight             = htmlspecialchars($edit['min_weight']);
    $max_weight             = htmlspecialchars($edit['max_weight']);
    $processing_time        = htmlspecialchars($edit['processing_time']);
    $level_1                = htmlspecialchars($edit['level_1']);

    mysqli_query($connect, "UPDATE     package_setting 
                                SET     name_packages       = '$name_packages',
                                        date_created        = '$date_created',
                                        date_modified       = '$date_modified',
                                        status              = '$status',
                                        price_per_kg        = '$price_per_kg',
                                        min_weight          = '$min_weight',
                                        max_weight          = '$max_weight',
                                        processing_time     = '$processing_time',
                                        level_1             = '$level_1',
                                WHERE   id                  = '$id'");

    return mysqli_affected_rows($connect);
}
// Edit package \\

// Delete package
function delete($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM package_setting WHERE id = $id");
    return mysqli_affected_rows($connect);
}
// Delete package \\
