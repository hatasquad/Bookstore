<?php
$username = filter_var(trim($_POST['username']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


$password = md5($password."asdfg2345");

require '../php/dbSetting.php';

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$username' AND `pass` ='$password'");
$user = $result->fetch_assoc();
if(count($user) == 0){
    echo "User not found";
    exit();
}


setcookie('user', $user['login'], time() + 3600 * 24, "/");

$mysql->close();
header('Location: ../index.php');
?>