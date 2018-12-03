<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

class Warning extends BotModelBase
{

    protected $dates = [
        'warn_date',
        'expire_date',
    ];

}
