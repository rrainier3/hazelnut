<?php
// If you are using Composer (recommended)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75');

// does not work preconfig on heroku!
// $apiKey = getenv('MAILGUN_API_KEY');
// $mailgun = new Mailgun($apiKey);

echo "Successfully instantiated mailgun!";

$domain = "mg.usnurses.com";

// # Make the call to the client.
// $result = $mailgun->sendMessage($domain, array(
//     'from'    => 'RAY RAY <rayrainier@usnurses.com>',
//     'to'      => 'Roy <roywesley@sbcglobal.net>',
//     'subject' => 'RE: Questions on Roys Lawn Services',
//     'text'    => 'Hey Roy this is Ray testing our email form'
// ));

// ADD YOUR INFOMATION HERE
$recipient = "rrainier3@hotmail.com";
$successPage = "index.html";
// NO NEED TO EDIT ANYTHING BELOW THIS LINE =====================//


//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$message=stripslashes($message);
$message= "Name: $name, \n\n Message: $message";

/*
Simple form validation
check to see if an email and message were entered
*/
//if no message entered and no email entered print an error
if (empty($message) && empty($email)){
print "No email address and no message was entered. <br>Please include an email and a message";
}
//if no message entered send print an error
elseif (empty($message)){
print "No message was entered.<br>Please include a message.<br>";
}
//if no email entered send print an error
elseif (empty($email)){
print "No email address was entered.<br>Please include your email. <br>";
}
//if the form has both an email and a message
else {

# Make the call to the client.
$result = $mailgun->sendMessage("$domain",
  array('from'    => 'Roys Lawn Service <royslawnservice@usnurses.com>',
        'to'      => 'Customer <$recipient>',
        'subject' => $subject,
        'text'    => $message));

header("Location: $successPage");
}

?>