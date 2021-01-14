<?php 
	include 'connection.php';

    $amount = 0;

//    $query = "SELECT COUNT(*) as customer_num FROM `customer`";
    $query = "SELECT DISTINCT si_no FROM `customer`";
    
    $result = mysqli_query($connect, $query);
    
    while($row = mysqli_fetch_array($result)){
        $amount += 1;
    }
    echo $amount;
?>