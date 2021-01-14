<?php
    include 'connection.php';
    $customer_name = mysqli_real_escape_string($connect, $_GET['customer_name']);
    $contact_no = mysqli_real_escape_string($connect,$_GET['contact_no']);
    $si_no = mysqli_real_escape_string($connect,$_GET['si_no']);
    $dr_no = mysqli_real_escape_string($connect,$_GET['dr_no']);
    $term = mysqli_real_escape_string($connect,$_GET['term']);
    $address = mysqli_real_escape_string($connect,$_GET['address']);
    $date = mysqli_real_escape_string($connect,$_GET['date']);
    $product_sn = json_decode($_GET['product_sn']);
    $product_qt =  json_decode($_GET['product_qt']);
    $product_unit = json_decode($_GET['product_unit']);
    $product_sub_t = json_decode($_GET['product_sub_t']);
    $identify = false;

    
if($customer_name == NULL && $contact_no == NULL && $si_no == NULL && $dr_no == NULL && $term == NULL && $address == NULL && $date == NULL){
    echo 'empty';
}
else{
    for($i = 0; $i<count($product_sn); $i++){
        $update_product = "UPDATE `products` SET `quantity` = quantity - $product_qt[$i] WHERE `products`.`serial_number` = '$product_sn[$i]'";
        mysqli_query($connect, $update_product);
        $query = "INSERT INTO `customer` (`customer_id`, `customer_name`, `contact_no`, `si_no`, `dr_no`, `term`, `customer_address`, `date`, `product_serial_number`, `quantity`, `unit`, `amount_paid`) VALUES 
             (NULL, '$customer_name', $contact_no, $si_no, $dr_no, '$term', '$address', '$date', '$product_sn[$i]', $product_qt[$i], '$product_unit[$i]', $product_sub_t[$i])";
    
        $result = mysqli_query($connect, $query);
        if($result) {
            $identify = true;
        }else{
            $identify = false;
            break;
        }
    }
    //
    if($identify == true){
        echo "Customer Added Successfully!";
    }else{
        echo $result;
    }
}

?>