<?php
include "db/connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$fullname = $fname . " " . $mname . " " . $lname;
$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password2']);
$position = $_POST['position'];
$hint = $_POST['hint'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$check_username = "SELECT * FROM user WHERE username = '$username'";
$check_result = mysqli_query($connect, $check_username);
$count = mysqli_num_rows($check_result);

if ($count == 0) {
	$sql = "INSERT INTO user (username, password, employee_name, position, user_type, hint) VALUES ('$username', '$hashed_password', '$fullname', '$position', 'user', '$hint')";
	$result = mysqli_query($connect, $sql);
	echo "
			<script>
				alert('Account Created Successfully!!');
			</script>
		";
	header('location:index.php');
} else {
	echo "
			<script>
				alert('Username Already Exists!');
				window.location = 'index.php';
			</script>
		";
}
