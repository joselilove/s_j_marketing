<?php
    
    include "connection.php";
    $a = 0;
    $myObj = new stdClass();
    $date = $_GET['date'];
    $sort = $_GET['sort'];

    $show_query1 = "SELECT * FROM `products`, `customer` WHERE serial_number = product_serial_number AND $sort = '$date'";
    $show_query2 = "SELECT * FROM `products`, `customer`, `sales` WHERE `products`.`serial_number` = `product_serial_number` AND `customer`.`date`=`sales`.`date` AND `customer`.`date` = '$date' GROUP BY `sales`.`customer_id`";
    $find_sales_report = "SELECT * FROM `sales` WHERE date = '$date'";
    $find_date_s = "SELECT COUNT(*) as r_num FROM `sales` WHERE date = '$date'";

    $show_sales_c_i = mysqli_query($connect,$show_query1);
    $show_sales_c_i_s = mysqli_query($connect,$show_query2);
    $show_sales_num = mysqli_query($connect,$find_date_s);
    $show_sales_report = mysqli_query($connect,$find_sales_report);
    $row_n = mysqli_fetch_array($show_sales_num);
    
    if($row_n["r_num"] == 0){
        while ($row = mysqli_fetch_array($show_sales_c_i)) {
                $insert_sales = 'INSERT INTO `sales` 
                (`id`, `dr`, `customer_name`, `model`, `serial_number`, `term`, `net_cash`, `coll`, `charge`, `amount_finance`, `credit_approval`, `promo_item`, `serial_number_2`, `remarks`, `date`,`customer_id`) 
                VALUES 
                (NULL, 
                "'.$row["dr_no"].'", 
                "'.$row["customer_name"].'", 
                "'.$row["unit"].'", 
                "'.$row["serial_number"].'",
                "'.$row["term"].'",
                "'.$row["amount_paid"].'", 
                NULL, 
                NULL, 
                NULL, 
                NULL, 
                NULL, 
                NULL, 
                NULL, 
                "'.$row["date"].'",
                '.$row["customer_id"].')';
            mysqli_query($connect,$insert_sales);    
        $myObj->r_num[$a]           = $row_n["r_num"];
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
    echo $myJSON = json_encode($myObj);
    }else{
        while ($row = mysqli_fetch_array($show_sales_c_i_s)) {
             $myObj->coll[$a]        = $row['coll'];
             $myObj->charge[$a]      = $row['charge'];
             $myObj->amount_finance[$a]    = $row['amount_finance'];
             $myObj->credit_approval[$a]   = $row['credit_approval'];
             $myObj->promo_item[$a]        = $row['promo_item'];
             $myObj->serial_number_2[$a]   = $row['serial_number_2'];
             $myObj->remarks[$a]           = $row['remarks'];
         $myObj->r_num[$a]           = $row_n["r_num"];
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
     echo $myJSON = json_encode($myObj);
    }
?>