<?php
session_start();
include "db/connection.php";
include "db/displayAlert.php";

$username = $_POST['username'];
$password = $_POST['Password'];
//admin
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
$message = 'Incorrect username or password!';

while ($rows = mysqli_fetch_assoc($result)) {

    $user_id = $rows['ID'];
    $user_name = $rows['username'];
    $pass_word = $rows['password'];
    $full_name = $rows['employee_name'];
    $account_type = $rows['user_type'];
    $_SESSION['user_type'] = $account_type;

    if (password_verify($password, $rows['password']) && $account_type == 'admin') {

        $_SESSION['login_admin'] = $username;
        $_SESSION['login_name'] = $full_name;
        header('location:home.php');
    } else if (password_verify($password, $rows['password']) && $account_type == 'user') {

        $_SESSION['login_user'] = $username;
        $_SESSION['login_name'] = $full_name;
        $message = 'Welcome';
        header("location: home.php");
    } else {
        $message = 'Incorrect username or password!';
    }
}

$_SESSION["login_message"] = $message;

header("location: index.php");
