<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75');

echo "Successfully instantiated mailgun!";

$domain = "sandboxbf951da5d01741feaf8cd9c343aca27b.mailgun.org";

# Make the call to the client.
$result = $mailgun->sendMessage($domain, array(
    'from'    => 'Excited User <rrainier@hotmail.com>',
    'to'      => 'Baz <rayrainier@yahoo.com>',
    'subject' => 'RE: Questions on Construction Billing Invoices',
    'text'    => 'Testing some Mailgun blah blah!'
));

?>
