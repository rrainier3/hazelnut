<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75');

echo "Successfully instantiated mailgun!";

$domain = "mg.usnurses.com";

# Make the call to the client.
$result = $mailgun->sendMessage($domain, array(
    'from'    => 'Administrator <rayrainier@usnurses.com>',
    'to'      => 'Roy <rrainier3@hotmail.com>',
    'subject' => 'RE: Questions on Roys Lawn Services',
    'text'    => 'Hey Roy this is Ray testing our email form'
));

?>
