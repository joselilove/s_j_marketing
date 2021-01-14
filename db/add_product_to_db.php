<?php
include 'connection.php';

$product_name = $_GET['product_name'];
$unit = $_GET['unit'];
$serial_number = $_GET['serial_number'];
$quantity = $_GET['quantity'];
$date_received = $_GET['date_received'];
$brand_name = $_GET['brand_name'];
$price = $_GET['price'];
$stm_no = $_GET['stm_no'];
$stm_date = $_GET['stm_date'];
$dr_si_no = $_GET['dr_si_no'];
$dr_si_date = $_GET['dr_si_date'];

$query = "INSERT INTO products(dr_si_no, dr_si_date, stm_no, stm_date, product_name, unit, serial_number, quantity, date_received, brand_name, price) 
              VALUES
             ($dr_si_no, '$dr_si_date', $stm_no, '$stm_date', '$product_name', '$unit', '$serial_number', $quantity, '$date_received', '$brand_name', $price)";

$result = mysqli_query($connect, $query);
if ($result) {
    echo "Product Added!";
} else {
    echo '';
}
