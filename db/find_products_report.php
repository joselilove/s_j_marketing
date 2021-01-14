<?php
include "connection.php";
$a = 0;
$myObj = new stdClass();
$serial_number = $_GET['serial_number'];
$sort = $_GET['sort'];
$show_query = "SELECT * FROM products WHERE $sort LIKE '$serial_number%'";
$show_inventory = mysqli_query($connect, $show_query);
while ($row = mysqli_fetch_array($show_inventory)) {
    $myObj->ID[$a]    = $row["ID"];
    $myObj->product_name[$a]    = $row["product_name"];
    $myObj->unit[$a]            = $row["unit"];
    $myObj->serial_number[$a]   = $row["serial_number"];
    $myObj->quantity[$a]        = $row["quantity"];
    $myObj->date_received[$a]   = $row["date_received"];
    $myObj->brand_name[$a]      = $row["brand_name"];
    $myObj->price[$a]           = $row["price"];
    $a++;
}
echo $myJSON = json_encode($myObj);
