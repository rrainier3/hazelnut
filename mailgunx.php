<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

// $mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75');

$mg_api_key = getenv('MAILGUN_API_KEY')
$mailgun = new Mailgun($mg_api_key)

echo "Successfully instantiated mailgun!";

$domain = "mg.usnurses.com";

# Make the call to the client.
$result = $mailgun->sendMessage($domain, array(
    'from'    => 'RAY RAY <rayrainier@usnurses.com>',
    'to'      => 'Proximity <roywesley@sbcglobal.net>',
    'subject' => 'RE: Questions on Roys Lawn Services',
    'text'    => 'This is a test for getenv var MAILGUN_API_KEY'
));

?>
