<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75');

echo "Successfully instantiated mailgun!";

$domain = "mg.usnurses.com";

# Make the call to the client.
$result = $mailgun->sendMessage($domain, array(
    'from'    => 'Excited User <rrainier@hotmail.com>',
    'to'      => 'Baz <web-ujv0j@mail-tester.com>',
    'subject' => 'RE: Questions on Construction Billing Invoices',
    'text'    => 'Testing some Mailgun blah blah!'
));

?>
