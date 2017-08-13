<?php
// If you are using Composer (recommended)
require 'vendor/autoload.php';

// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email("Example User", "rrainier3@hotmail.com");
$subject = "Sending with SendGrid is Fun 2017";
$to = new SendGrid\Email("Example User", "rayrainier@yahoo.com");
$content = new SendGrid\Content("text/plain", "this is a round trip test 123");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();

print_r($response->body());

?>