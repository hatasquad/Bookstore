<?php
require 'php/dbSetting.php';

$bookID = 0;
$bookTitle = '';
$bookAuthor = '';
$bookDescription = '';
$bookPrice = 0;
$booKImg = '';
$bookNew= '1';

$result = $mysql->query("SELECT * FROM `Books`");

$newBook = $mysql->query("SELECT * FROM `Books` WHERE `isNew` = '$bookNew'");


$mysql->close();



?>