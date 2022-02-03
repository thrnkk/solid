<?php

namespace App\Models;

use App\Components\Notification;
use App\Database;
use App\Interfaces\INotification;
use App\Interfaces\IRegister;

class Lead extends Database implements IRegister, INotification {

    public function save() {}
    public function sendNotification(Notification $notification) {}

}