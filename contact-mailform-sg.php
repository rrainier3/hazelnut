<?php
require 'vendor/autoload.php';

// ADD YOUR INFOMATION HERE
$recipient = "rrainier3@hotmail.com";
$successPage = "index.html";
// NO NEED TO EDIT ANYTHING BELOW THIS LINE =====================//


//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

sendHelloEmail($recipient, $subject, $message, $email);

header("Location: $successPage");

// $name=stripslashes($name);
// $email=stripslashes($email);
// $subject=stripslashes($subject);
// $message=stripslashes($message);
// $message= "Name: $name, \n\n Message: $message";

/*
Simple form validation
check to see if an email and message were entered
*/
//if no message entered and no email entered print an error
// if (empty($message) && empty($email)){
// print "No email address and no message was entered. <br>Please include an email and a message 555";
// }
// //if no message entered send print an error
// elseif (empty($message)){
// print "No message was entered.<br>Please include a message. 444 <br>";
// }
// //if no email entered send print an error
// elseif (empty($email)){
// print "No email address was entered.<br>Please include your email 777. <br>";
// }
// //if the form has both an email and a message
// else {

// //mail the form contents
// //mail( "$recipient", "$subject", "$message", "From: $email" );
// // debugHello($recipient, $subject, $message, $email);

// sendHelloEmail($recipient, $subject, $message, $email);

// header("Location: $successPage");
// }

function debugHello($recipient, $subject, $message, $email)
{
	print("$recipient, $subject, $message, $email");
}

function helloEmail($recipient, $subject, $message, $email)
{
    $from = new Email(null, $email);
    $subject0 = $subject;
    $to = new Email(null, $recipient);
    $content = new Content("text/plain", $message);
    $mail = new Mail($from, $subject0, $to, $content);
    $to = new Email(null, "rrainier@hotmail.com");
    $mail->personalization[0]->addTo($to);
    //echo json_encode($mail, JSON_PRETTY_PRINT), "\n";
    return $mail;
}

function sendHelloEmail($recipient, $subject, $message, $email)
{
    $apiKey = getenv('SENDGRID_API_KEY');
    $sg = new \SendGrid($apiKey);
    $request_body = helloEmail($recipient, $subject, $message, $email);
    $response = $sg->client->mail()->send()->post($request_body);
    echo $response->statusCode();
    echo $response->body();
    print_r($response->headers());
}

?>