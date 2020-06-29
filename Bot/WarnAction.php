<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class WarnAction
 *
 * @package App\Models\Bot
 *
 * @property string                    guild_id
 * @property integer                   duration
 * @property integer                   threshold
 * @property \App\Enums\WarnActionType type
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="WarnAction")
 * )
 *
 * @OA\Property(
 *   property="guild_id",
 *   type="string",
 *   description="The id of the guild that should get patreon features",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="duration",
 *   type="integer",
 *   description="The duration of this warn action, days for temp bans and minutes for temp mutes",
 *   example=5
 * ),
 * @OA\Property(
 *   property="threshold",
 *   type="integer",
 *   description="The threshold before this action may activate",
 *   example=3
 * ),
 * @OA\Property(
 *   property="type",
 *   type="string",
 *   description="The type of this warn action",
 *   enum={"MUTE", "TEMP_MUTE", "KICK", "TEMP_BAN", "BAN"},
 *   example="TAG"
 * ),
 */
class WarnAction extends BotModelBase
{
    public function guildSetting(): BelongsTo
    {
        return $this->belongsTo(GuildSetting::class, 'guild_id', 'guildId');
    }
}
