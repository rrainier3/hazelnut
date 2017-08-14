<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75');

echo "Successfully instantiated mailgun!";

$domain = "hotmail.com";

# Make the call to the client.
$result = $mailgun->sendMessage($domain, array(
    'from'    => 'Excited User <rayrainier@yahoo.com>',
    'to'      => 'Baz <rrainier@hotmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun blah blah!'
));

?>
