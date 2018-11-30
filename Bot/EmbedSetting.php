<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmbedSetting extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'embedSettings';
}
