<?php
    include "connection.php";
    $a = 0;
    $myObj = new stdClass();
    $date = $_GET['date'];
    $sort = $_GET['sort'];
    $show_query = "SELECT * FROM `products`, `customer` WHERE serial_number = product_serial_number AND $sort LIKE '$date%'";
	$show_inventory = mysqli_query($connect,$show_query);
	// if ($show_inventory) {
		while ($row = mysqli_fetch_array($show_inventory)) {
        $myObj->ID[$a]              = $row["ID"];  
        $myObj->product_name[$a]    = $row["product_name"];
        $myObj->unit[$a]            = $row["unit"];
        $myObj->serial_number[$a]   = $row["serial_number"];
        $myObj->quantity[$a]        = $row["quantity"];
        $myObj->date_received[$a]   = $row["date_received"];
        $myObj->brand_name[$a]      = $row["brand_name"];
        $myObj->price[$a]           = $row["price"];
        $myObj->customer_id[$a]      = $row["customer_id"];
        $myObj->customer_name[$a]    = $row["customer_name"];
        $myObj->contact_no[$a]       = $row["contact_no"];
        $myObj->si_no[$a]            = $row["si_no"];
        $myObj->dr_no[$a]            = $row["dr_no"];
        $myObj->term[$a]             = $row["term"];
        $myObj->customer_address[$a] = $row["customer_address"];
        $myObj->date[$a]             = $row["date"];
        $myObj->product_serial_number[$a]     = $row["product_serial_number"];
        $myObj->quantity[$a]         = $row["quantity"];
        $myObj->unit[$a]             = $row["unit"];
        $myObj->amount_paid[$a]       = $row["amount_paid"];
        $a++;
	}	
	// }
	echo $myJSON = json_encode($myObj);
?>