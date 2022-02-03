<?php

namespace App;

class Whatsapp implements IMessage {

    public function send() {
        echo 'Whatsapp: your token is 12345';
    }

}