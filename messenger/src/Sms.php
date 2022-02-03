<?php

namespace App;

class Sms implements IMessage {

    public function send() {
        echo 'SMS: your token is 12345';
    }

}