<?php
// variable setting
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from='hindrecycling.com';
$email_subject="Pick A Schedule Form";
$email_body="First-Name: $firstname.\n".
            "Last-Name: $lastname.\n".
             "User-Phone-number: $phonenumber.\n".
             "User-Email: $email.\n".
             "User-Message: $message.\n";
             
             

$to="hindrecycling@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:../index.html");  
?>