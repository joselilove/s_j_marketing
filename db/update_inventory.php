<?php
include 'connection.php';

$product_name = $_GET['product_name'];
$unit = $_GET['unit'];
$serial_number = $_GET['serial_number'];
$quantity = $_GET['quantity'];
$date_received = $_GET['date_received'];
$brand_name = $_GET['brand_name'];
$product_id = $_GET['product_id'];
$add = $_GET['add'];
if ($add == null) {
    $add = 0;
}

$query = "UPDATE `products` SET `product_name`     = '$product_name',
                                    `unit`             = '$unit',                           
                                    `serial_number`    = '$serial_number',
                                    `quantity`         = $quantity + $add,
                                    `date_received`    = '$date_received',
                                    `brand_name`       = '$brand_name'
                                WHERE `products`.`ID`  =  $product_id";
$result = mysqli_query($connect, $query);
if ($result) {
    echo "Product Updated!";
} else {
    echo $result;
}
