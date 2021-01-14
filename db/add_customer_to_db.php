<?php
    include 'connection.php';
      
    $customer_name = $_GET['customer_name'];
    $contact_no = $_GET['contact_no'];
    $si_no = $_GET['si_no'];
    $dr_no = $_GET['dr_no'];
    $term = $_GET['term'];
    $address = $_GET['address'];
    $date = $_GET['date'];
    $product_name = $_GET['product_name'];
    $serial_number = $_GET['serial_number'];
    $quantity = $_GET['quantity'];
    $unit = $_GET['unit'];
    $amount_paid = $_GET['amount_paid'];

    $availability = false;

    $find_product_quantity = "SELECT * FROM `products` WHERE serial_number = '$serial_number'";
    $result_quantity = mysqli_query($connect, $find_product_quantity);
    $product_row = mysqli_fetch_array($result_quantity);

    if($product_row['quantity'] > $quantity){
        $update_product = "UPDATE `products` SET `quantity` = quantity - $quantity WHERE `products`.`serial_number` = '$serial_number'";
        mysqli_query($connect, $update_product);
        $availability = true;
    }
    else{
        $availability = false;
        echo 'Available quantity is '.$product_row['quantity'];
    }



if($availability){
    $query = "INSERT INTO `customer` (`customer_id`, `customer_name`, `contact_no`, `si_no`, `dr_no`, `term`, `customer_address`, `date`, `product_serial_number`, `quantity`, `unit`, `amount_paid`) VALUES 
            (NULL, '$customer_name', $contact_no, $si_no, $dr_no, '$term', '$address', '$date', '$serial_number', $quantity, '$unit', $amount_paid)";

	$result = mysqli_query($connect, $query);
	if ($result) {
		echo "Customer Added!";
	}
	else{
		echo $result;
	}
}
?>