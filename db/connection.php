<?php
	$connect = mysqli_connect("localhost","root","","sj_db");
		if(!$connect){
			die('could not connect '.mysql_error());
		}
?>