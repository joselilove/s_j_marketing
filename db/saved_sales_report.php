<?php
include 'connection.php';

$c_id = json_decode($_GET['c_id']);
$colln_a = json_decode($_GET['colln_a']);
$charge_a = json_decode($_GET['charge_a']);
$amount_f_a = json_decode($_GET['amount_f_a']);
$credit_a = json_decode($_GET['credit_a']);
$promo_a = json_decode($_GET['promo_a']);
$serial_a = json_decode($_GET['serial_a']);
$remarks_a = json_decode($_GET['remarks_a']);
for ($i = 0; $i < count($c_id); $i++) {
    $query = "UPDATE `sales` SET `coll`          = $colln_a[$i],
                                    `charge`         = $charge_a[$i],
                                    `amount_finance`  = $amount_f_a[$i],
                                    `credit_approval`= '$credit_a[$i]',
                                    `promo_item`     = '$promo_a[$i]',
                                    `serial_number_2`= '$serial_a[$i]',
                                    `remarks`        = '$remarks_a[$i]'
        WHERE `sales`.`customer_id` = $c_id[$i]";
    $result = mysqli_query($connect, $query);
}
