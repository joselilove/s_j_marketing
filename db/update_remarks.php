<?php
include 'connection.php';

$prod_id = json_decode($_GET['prod_id']);
$remarks = json_decode($_GET['remarks']);

for ($i = 0; $i < count($prod_id); $i++) {
    $query = "UPDATE `products` SET `remarks` = '$remarks[$i]' WHERE `products`.`ID` = $prod_id[$i]";
    $result = mysqli_query($connect, $query);
}

echo 'succes';
	// if ($result) {
	// 	echo "Customer Updated!";
	// }
	// else{
	// 	echo $result;
	// }
