<?php
    include 'connection.php';
      
    $customer_id = $_GET['customer_id'];
    $customer_name = $_GET['customer_name'];
    $contact_no = $_GET['contact_no'];
    $si_no = $_GET['si_no'];
    $dr_no = $_GET['dr_no'];
    $term = $_GET['term'];
    $address = $_GET['address'];
    $date = $_GET['date'];
    // $product_name = $_GET['product_name'];
    $serial_number = $_GET['serial_number'];
    $quantity = $_GET['quantity'];
    $unit = $_GET['unit'];
    $amount_paid = $_GET['amount_paid'];

	$query = "UPDATE `customer` SET `customer_name`= '$customer_name',
                                    `contact_no` = $contact_no,
                                    `si_no` = $si_no,
                                    `dr_no` = $dr_no,
                                    `term` = '$term',
                                    `customer_address` = '$address',
                                    `date` = '$date',
                                    `product_serial_number` = '$serial_number',
                                    `quantity` =   $quantity,
                                    `unit` =  '$unit',
                                    `amount_paid` = $amount_paid
                                WHERE `customer_id` = $customer_id";

	$result = mysqli_query($connect, $query);
	if ($result) {
		echo "Customer Updated!";
	}
	else{
		echo $result;
	}
