<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');


/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
/*Content*/
$from = new SendGrid\Email("ROYS LAWN SERVICE", "rayrainier@yahoo.com");

// $subject = "SUBJECT";
$subject = $_POST['message'];

$to = new SendGrid\Email("PAUL STANLEY", "rrainier3@hotmail.com");

$content = new SendGrid\Content("text/plain", "

Email : {$email}<br>
Name : {$name}<br>
Message : {$message}

	");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('API_KEY');
$sg = new \SendGrid($apiKey);
/*Response*/
$response = $sg->client->mail()->send()->post($mail);
?>

<!--Print the response-->
<pre>
    <?php
    var_dump($response);
    ?>
</pre>