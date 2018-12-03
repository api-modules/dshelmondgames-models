<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class OneGuildPatron extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'oneGuildPatrons';
    protected $primaryKey = 'user_id';

    protected $casts = [
        'user_id' => 'String',
        'guild_id' => 'String',
    ];
}
