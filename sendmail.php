<?php

if (!$_POST)
    exit;

$to = "dev1@mdcconcepts.in";
$email = $_POST['email'];
$name = $_POST['name'];
$comment = $_POST['message'];
$subject = $_POST['subject'];
$content = "$name sent you a message from your enquiry form:\r\n\n";
$content .= "Contact Reason: $message \n\nEmail: $email \n\n";
mail($to, $subject, $content, "From: $email \r\n Reply-To: $email \r\nReturn-Path: $email\r\n");
//                header( 'Location: http://www.yoursite.com/new_page.html' ) ;
?>
