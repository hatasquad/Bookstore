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



/*for($i = 0; $i< mysqli_num_rows($result); $i++){
    $result->fetch_row();
    $row = mysqli_fetch_array( $result,MYSQLI_ASSOC);
    echo $row['title'];
    echo '<br>';

    echo '<br>';}*/





?>