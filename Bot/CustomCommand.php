<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomCommand extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'customCommands';

    protected $casts = [
        'autoresponse' => 'boolean'
    ];
}
