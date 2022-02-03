<?php

namespace App\Models;

use App\Components\Log;
use App\Components\Notification;
use App\Database;
use App\Interfaces\Register;

class Lead extends Database implements Register {

    public function save() {}
    public function registerLog(Log $log) {}
    public function sendNotification(Notification $notification) {}

}