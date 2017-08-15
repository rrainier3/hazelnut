<?php
// If you are using Composer (recommended)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mg_api_key = getenv('MAILGUN_API_KEY');
$mailgun = new Mailgun($mg_api_key);

// echo "Successfully instantiated mailgun!";

$domain = "mg.usnurses.com";

// ADD OWNER INFOMATION HERE
$businessowner = "roywesley@sbcglobal.net";
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
$message= "Name: " . $name . " <" . $email . ">" . ",\n\nMessage:\n$message";

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
  array('from'    => 'Marketing Services <royslawnservice@usnurses.com>',
        'to'      => 'Roys Lawn Service <' . $businessowner . '>',
        'subject' => $subject,
        'text'    => $message));

header("Location: $successPage");

}

?>