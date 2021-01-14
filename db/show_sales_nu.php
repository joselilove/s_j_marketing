<?php 
	include 'connection.php';

    $amount = 0;

//    $query = "SELECT COUNT(*) as sales_num FROM `products`, `customer` WHERE serial_number = product_serial_number";
$query = "SELECT * FROM `products`, `customer` WHERE serial_number = product_serial_number";
    
    $result = mysqli_query($connect, $query);
    
    while($row = mysqli_fetch_array($result)){
        $amount += $row['quantity'];
//        break;
    }
    echo $amount;
?>