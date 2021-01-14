<?php
    include "connection.php";
    $a = 0;
    $myObj = new stdClass();
    $customer_name = $_GET['customer_name'];
    $sort = $_GET['sort'];
    $show_query = "SELECT * FROM customer WHERE $sort LIKE '$customer_name%'";
    // firstName LIKE 'a%';
	$show_inventory = mysqli_query($connect,$show_query);
	// if ($show_inventory) {
		while ($row = mysqli_fetch_array($show_inventory)) {
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