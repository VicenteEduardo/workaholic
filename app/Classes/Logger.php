<?php

namespace App\Classes;

use App\Models\Log as ModelsLog;
use Illuminate\Support\Facades\Auth;

class Logger
{

    public function log($level, $message)
    {

        ModelsLog::create([
            'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
            'USER_ID' => Auth::user()->id,
            'USER_NAME' => Auth::user()->name,
            'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
            'message' => $message,
            'level' => $level,
        ]);

    }
}
