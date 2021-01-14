<?php 
	include 'connection.php';

    $amount = 0;

    $query = "SELECT COUNT(*) as admin_num FROM `user` WHERE `user_type` = 'admin'";
    
    $result = mysqli_query($connect, $query);
    
    while($row = mysqli_fetch_array($result)){
        $amount = $row['admin_num'];
        break;
    }
    echo $amount;
?>