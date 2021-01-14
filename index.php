<?php
session_start();
if (isset($_SESSION['login_user'])) {
    header('location:home.php');
}

if (isset($_SESSION['login_admin'])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>

<head>
    <title>S & J Marketing</title>
    <?php
    include "template/plugins.php";
    ?>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
            <form action="login.php" method="post">
                <input id="user" type="text" class="ggg" name="username" placeholder="Username" required>
                <input type="password" class="ggg" name="Password" placeholder="Password" required>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
            </form>
            <form action="hint.php" method="post">
                <input id="for" type="hidden" name="userName" value="">
                <p onclick="getHint()"><u>Forgot password?</u></p>
            </form>
            <p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
        </div>
    </div>
</body>
<script>
    function getHint() {
        var xhttp = new XMLHttpRequest;
        var x = document.getElementById('user').value;
        var destination = "hint.php?q=" + x;
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        }

        xhttp.open("GET", destination, true);
        xhttp.send();
    }
</script>

</html>