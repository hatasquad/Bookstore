<?php
$username = filter_var(trim($_POST['username']),
    FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


$password = md5($password."asdfg2345");

require '../php/dbSetting.php';
if(mb_strlen($username)<3|| mb_strlen($username)>90){
    echo 'error Username';
    exit();
}else if(mb_strlen($email)<3|| mb_strlen($email)>50){
    echo 'error Email';
    exit();
}else if(mb_strlen($password)<6|| mb_strlen($password)>50){
    echo 'error Password must be 6 char';
    exit();
}
$mysql->query("INSERT INTO `users`(`login`, `mail`, `pass`) 
VALUES ('$username', '$email', '$password')");
$mysql->close();
header('Location: ../login.php');
?>