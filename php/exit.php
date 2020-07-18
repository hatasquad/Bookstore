<?php

$username = '';

$password = '';

$cookieClean = 's';

require '../php/dbSetting.php';

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$username' AND `pass` ='$password'");
$user = $result->fetch_assoc();
setcookie('user', $user['login'], time() - 3600 *24, "/");

header('Location: ../login.php');
?>
