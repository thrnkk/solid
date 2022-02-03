<?php

namespace App\Models;

use App\Components\Log;
use App\Components\Notification;
use App\Database;
use App\Interfaces\ILog;
use App\Interfaces\INotification;
use App\Interfaces\IRegister;

class User extends Database implements IRegister, INotification, ILog {

    public function save() {}
    public function registerLog(Log $log) {}
    public function sendNotification(Notification $notification) {}

}