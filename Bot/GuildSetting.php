<?php

namespace App\Models\Bot;

use Illuminate\Database\Eloquent\SoftDeletes;

class GuildSetting
{
    use SoftDeletes;

    protected $table = 'guildSettings';
}
