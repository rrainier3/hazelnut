require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-88072c0127ec9c6e30c7b39de2a74b75', new \Http\Adapter\Guzzle6\Client());

echo "Successfully instantiated mailgun!"
