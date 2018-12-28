<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

class Mute extends BotModelBase
{
    protected $dates = [
        'mute_date',
        'unmute_date',
    ];
}
