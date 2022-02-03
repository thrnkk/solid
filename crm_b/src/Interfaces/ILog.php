<?php

namespace App\Interfaces;

use App\Components\Log;

interface ILog {

    public function registerLog(Log $log);

}