<?php
	
	include "db/connection.php";

	$username = $_GET['q'];
	$sql = "SELECT hint FROM user WHERE username = '$username'";
	$result = mysqli_query($connect, $sql);
	$count = mysqli_num_rows($result);

	if($count == 0){
		$hint = "There is no existing account with this Username!"; 
	} else{
		while($row = mysqli_fetch_assoc($result)){
			$hint = $row['hint'];
		}	
	}
	echo $hint;
?>