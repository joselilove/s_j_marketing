<?php
include 'connection.php';
$product_id = $_GET['product_id'];

$query = "DELETE from `products` where `ID` = $product_id";

$result = mysqli_query($connect, $query);
if ($result) {
    echo "Product Deleted!";
} else {
    echo '';
}
