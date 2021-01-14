<!DOCTYPE html>
<head>
	<title>S & J Marketing</title>
    <?php
        include 'template\plugins.php';
    ?>
    <script src="javascript/action.js"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
		<form action="registerUser.php" method="post">
			<input id="fname" type="text" class="ggg" name="fname" placeholder="First Name" required>
			<input id="lname" type="text" class="ggg" name="lname" placeholder=" Last Name" required>
			<input id="mname" type="text" class="ggg" name="mname" placeholder=" Middle Name" required>
			<input id="uname" type="text" class="ggg" name="username" placeholder="Username" required>
			<input id="pass1" type="password" class="ggg" name="password1" placeholder="Password" required>
			<input id="pass2" type="password" class="ggg" name="password2" placeholder="Retype Password" onfocus="hideError()" onblur="checkPass()" required>
			<p id="wrongPass">Incorrect Password.*</p>
			<input id="position" type="text" class="ggg" name="position" placeholder="Position" required>
            <input id="hint" type="text" class="ggg" name="hint" placeholder="Password Hint" required>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
		<p>Already Registered.<a href="index.php">Login</a></p>
</div>
</div>
</body>
</html>
