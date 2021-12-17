<?php
// Connect
include('../CONFIG/connect_database.php');
// Connect \\

// Add customers
function addOrder($addCustomers)
{

    global $connect;

    $package_name          = htmlspecialchars($addCustomers['package_name']);
    $customers_id          = htmlspecialchars($addCustomers['customers_id']);
    $name_customers        = htmlspecialchars($addCustomers['name_customers']);
    $weight                = htmlspecialchars($addCustomers['weight']);
    $phone_number          = htmlspecialchars($addCustomers['phone_number']);
    $order                 = date('Y-m-d');
    $finished              = htmlspecialchars($addCustomers['finished']);
    $address               = htmlspecialchars($addCustomers['address']);
    $note                  = htmlspecialchars($addCustomers['note']);
    $price                 = htmlspecialchars($addCustomers['price_to_pay']);

    mysqli_query($connect, "INSERT INTO customers
                                VALUES  ('', 
                                        '$package_name',
                                        '$customers_id',
                                        '$name_customers',
                                        '$weight',
                                        '$phone_number',
                                        '$order',
                                        '$finished',
                                        '$address',
                                        '$note',
                                        '$price')");

    return mysqli_affected_rows($connect);
}
// Add customers \\

// Show order
function showOrder($showCustomers)
{
    global $connect;

    $result = mysqli_query($connect, $showCustomers);
    $box = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $box[] = $data;
    }

    return $box;
}
// Show order \\

// Delete order
function deleteOrder($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM customers WHERE id = $id");
    return mysqli_affected_rows($connect);
}
// Delete order \\

// Edit order
function editOrder($editCustomers)
{

    global $connect;

    $id                     = $editCustomers['id'];
    $name_customers         = htmlspecialchars($editCustomers['name_customers']);
    $weight                 = htmlspecialchars($editCustomers['weight']);
    $phone_number           = htmlspecialchars($editCustomers['phone_number']);
    $address                = htmlspecialchars($editCustomers['address']);
    $note                   = htmlspecialchars($editCustomers['note']);

    mysqli_query($connect, "UPDATE      customers 
                                SET     name_customers      = '$name_customers',
                                        weight              = '$weight',
                                        phone_number        = '$phone_number',
                                        address             = '$address',
                                        note                = '$note'
                                WHERE   id                  = '$id'");

    return mysqli_affected_rows($connect);
}
// Edit order \\

// Search
function searchCustomers($keyword)
{
    $query = "SELECT * FROM customers WHERE customers_id = '$keyword'";

    return showOrder($query);
}
// Search \\