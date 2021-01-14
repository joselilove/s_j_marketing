<?php
	session_start();
	include "db/connection.php";

	$username = $_POST['username'];
	$password = $_POST['Password'];
	//admin
	$sql = "SELECT * FROM user WHERE username = '$username'";
	$result = mysqli_query($connect, $sql);
	$count = mysqli_num_rows($result);
		
		while ($rows = mysqli_fetch_assoc($result)) {
			
			$user_id = $rows['ID'];
			$user_name = $rows['username'];
			$pass_word = $rows['password'];
			$full_name = $rows['employee_name'];
			$account_type = $rows['user_type'];
			$_SESSION['user_type'] = $account_type;

			if(password_verify($password, $rows['password']) && $account_type == 'admin'){
				
				$_SESSION['login_admin'] = $username;
				$_SESSION['login_name'] = $full_name;
				header('location:home.php');
			}

			else if(password_verify($password, $rows['password']) && $account_type == 'user'){
				
				$_SESSION['login_user'] = $username;
				$_SESSION['login_name'] = $full_name;
				echo "
						<script>
							window.location = 'home.php';
						</script>
				";
			} else {
				echo "	<script>
							alert('Incorrect username or password!');
							window.location='index.php';
						</script>";
			}
		}
?>