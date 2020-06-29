<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class GuildBlacklist
 *
 * Holds a record for a word that is blacklisted in a guild
 *
 * @package App\Models\Bot
 *
 * @property integer id
 * @property string  guild_id
 * @property string  word
 */
class GuildBlacklist extends BotModelBase
{

    public function guildSetting(): BelongsTo
    {
        return $this->belongsTo(GuildSetting::class, 'guild_id', 'guildId');
    }

}
