<?php
    include "connection.php";
    $a = 0;
    $myObj = new stdClass();
    $show_query = "SELECT * FROM products WHERE `quantity`";
	$show_inventory = mysqli_query($connect,$show_query);
	// if ($show_inventory) {
		while ($row = mysqli_fetch_array($show_inventory)) {
        $myObj->ID[$a]    = $row["ID"];  
        $myObj->product_name[$a]    = $row["product_name"];
        $myObj->unit[$a]            = $row["unit"];
        $myObj->serial_number[$a]   = $row["serial_number"];
        $myObj->quantity[$a]        = $row["quantity"];
        $myObj->date_received[$a]   = $row["date_received"];
        $myObj->brand_name[$a]      = $row["brand_name"];
        $myObj->stm_no[$a]           = $row["stm_no"];
        $myObj->stm_date[$a]           = $row["stm_date"];
        $myObj->dr_si_no[$a]           = $row["dr_si_no"];
        $myObj->dr_si_date[$a]           = $row["dr_si_date"];
        $myObj->price[$a]           = $row["price"];
        $a++;
	}	
	// }
	echo $myJSON = json_encode($myObj);
