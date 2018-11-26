<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

class Kpop extends BotModelBase
{
    protected $table = 'kpop';

    public function getImgAttribute($value): String
    {
        return str_cdnPrefix($value);
    }
}
