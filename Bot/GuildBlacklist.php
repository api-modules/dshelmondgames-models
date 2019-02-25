<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GuildBlacklist extends BotModelBase
{

    public function guildSetting(): BelongsTo
    {
        return $this->belongsTo(GuildSetting::class, 'id', 'guild_id');
    }

}
