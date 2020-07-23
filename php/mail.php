<?php

use PHPMailer\PHPMailer\PHPMailer;

$json = file_get_contents('../goods.json');
$json = json_decode($json, true);


$userInfo = $_POST['userInfo'];

$cart = $_POST['cart'];

/*print_r($json);
print_r($cart);*/

$message = '';
$message .= '<h1>Order in the store</h1>';
$message .=  '<h2> Dear '.$userInfo['name'].' '.$userInfo['lastName'].'</h2>';
$message .= '<p>'.$userInfo['email'].'</p>';
$message .= '<p>'.$userInfo['phone'].'</p>';
$message .= '<h2>Your products</h2>';
$sum = 0;
foreach ($cart as $id => $count){
   $message .= '<h4>'.$json['books'][$id-1]['title'].'</h4>';
   $message .= '<p> price: '.$json['books'][$id-1]['price'].'</p>';
   $message .= '<p>count: '.$count.'</p>';
   $sum = $sum +$count * $json['books'][$id-1]['price'];
}
$message .= '<h4>Sum: <p>'.$sum.'</p></h4>';
$message .=  '<h3> You order was deliver to '.$userInfo['country'].', <br> '.$userInfo['region'].', '.$userInfo['city'].', <br>'.$userInfo['street'].', '.$userInfo['houseNumber'].' </h3>';
$message .= '<p>'.$userInfo['deliverMethod'].'</p>';
$message .= '<h3>Payment method: '.$userInfo['paymentMethod'].' </h3>';
$message .= '<p> Numer: '.$userInfo['cardNumber'].'</p>';

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

//SMTP Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "mykhailo.marodi@gmail.com";
$mail->Password = 'Aspirine12';
$mail->Port = 465; //587
$mail->SMTPSecure = "ssl"; //tls

$mail->isHTML(true);
$mail->setFrom($userInfo['email'], 'HATASQUAD BOOKSTORE');
$mail->addAddress($userInfo['email']);
$mail->Body = $message;

if ($mail->send()) {

$status = "success";
$response = "Email is sent!";
} else {
    $status = "failed";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
}

exit(json_encode(array("status" => $status, "response" => $response)));

/*print_r($message);*/

/*$to = 'mykhailo.marodi@gmail.com'.',';
$to .=$userInfo['email'];

$spectext = '<!DOCTYPE HTML><html><head><title>Order</title></head><body>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Order in store', $spectext.$message.'</body></html>', $headers);

if ($m) {echo 1;} else {echo 0;}*/