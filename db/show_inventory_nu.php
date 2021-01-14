<?php 
	include 'connection.php';

    $amount = 0;

    $query = "SELECT * FROM `products` WHERE `quantity` != 0";
    
    $result = mysqli_query($connect, $query);
    
    while($row = mysqli_fetch_array($result)){
        $amount += $row['quantity'];
        
    }
    echo $amount;
