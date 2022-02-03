<?php

namespace App\Models;

use App\Components\Log;
use App\Components\Notification;
use App\Database;
use App\Interfaces\IRegister;

class Contract extends Database implements IRegister {

    public function save() {}

}