<?php

namespace App\Interfaces;

use App\Components\Notification;

interface INotification {

    public function sendNotification(Notification $notification);

}