<?php

require __DIR__ . '/vendor/autoload.php';

use App\Messenger;
use App\Email;
use App\Sms;
use App\Whatsapp;

$msg = new Messenger(new Whatsapp());
$msg->sendToken();