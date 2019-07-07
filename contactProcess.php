<?php

$to = 'dhapolink@gmail.com';

$subject = 'This came from Al-Basheer Model School';

$name = $_POST['client_name'];
$email = $_POST['client_email'];
$phone = $_POST['client_phone'];
$comment = $_POST['comment'];

$comment = <<<EMAIL

Hi! My name is $name.

$comment

From $name
Oh ya, my email is $email

EMAIL;

$header = '$email';

if($_POST){

mail($to, $subject, $comment, $phone, $header);

	$feedback = 'Thanks for the worthless email';

	header('location:contact.php');

}
?>