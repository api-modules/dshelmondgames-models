<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class GuildSetting extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'guildSettings';
}
