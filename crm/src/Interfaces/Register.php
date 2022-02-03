<?php

namespace App\Interfaces;

use App\Components\Log;
use App\Components\Notification;

interface Register {

    public function save();
    public function registerLog(Log $log);
    public function sendNotification(Notification $notification);

}