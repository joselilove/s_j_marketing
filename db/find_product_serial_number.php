<?php
    include "connection.php";
    $a = 0;
    $myObj = new stdClass();
    $serial_number = $_GET['serial_number'];
    $show_query = "SELECT * FROM `products` WHERE serial_number = '$serial_number'";
	$show_inventory = mysqli_query($connect,$show_query);
	// if ($show_inventory) {
		while ($row = mysqli_fetch_array($show_inventory)) {
            $myObj->product_name[$a]    = $row["product_name"];
            $myObj->unit[$a]            = $row["unit"];
            $myObj->price[$a]           = $row["price"];
            $a++;
	}	
	// }
	echo $myJSON = json_encode($myObj);
?>