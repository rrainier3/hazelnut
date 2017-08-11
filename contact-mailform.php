<?php

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

// ADD YOUR INFOMATION HERE
$recipient = "rrainier@hotmail.com";
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

//mail the form contents
// mail( "$recipient", "$subject", "$message", "From: $email" );
# Instantiate the client.
$apiKey = getenv('MAILGUN_API_KEY');
$mgClient = new Mailgun($apiKey);
$domain = "samples.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
  array('from'    => 'Excited User <excited@samples.mailgun.org>',
        'to'      => 'Mailgun Devs <devs@mailgun.net>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));

header("Location: $successPage");
}

?>