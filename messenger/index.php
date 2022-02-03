<?php

require __DIR__ . '/vendor/autoload.php';

use App\Messenger;

$msg = new Messenger();
$msg->setChannel('email');
$msg->sendToken();