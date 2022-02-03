<?php

namespace App;

class Email implements IMessage {

    public function send() {
        echo 'E-mail: your token is 12345';
    }

}