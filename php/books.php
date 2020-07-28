<?php
require 'php/dbSetting.php';

$bookNew= '1';

$result = $mysql->query("SELECT * FROM `Books`");

$newBook = $mysql->query("SELECT * FROM `Books` WHERE `isNew` = '$bookNew'");


$mysql->close();



?>