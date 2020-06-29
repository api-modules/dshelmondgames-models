<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class GuildSetting.
 *
 * @property integer          id
 * @property string           guildId
 * @property string           prefix
 * @property boolean          autorole
 * @property boolean          enableJoinMessage
 * @property boolean          enableSwearFilter
 * @property boolean          autoDehoist
 * @property boolean          filterInvites
 * @property boolean          announceNextTrack
 * @property string           customWelcomeMessage
 * @property string           customLeaveMessage
 * @property string           serverDesc
 * @property string           logChannelId
 * @property string           welcomeLeaveChannel
 * @property boolean          spamFilterState
 * @property boolean          kickInsteadState
 * @property string           muteRoleId
 * @property string           ratelimits
 * @property integer          spam_threshold
 * @property integer          leave_timeout
 * @property GuildBlacklist[] blacklistedWords
 * @property WarnAction[]     warnActions
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="GuildSetting")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The uniqe id of this item",
 *   example=1
 * ),
 * @OA\Property(
 *   property="guildId",
 *   type="string",
 *   description="The id of the guild that this setting is for",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="prefix",
 *   type="string",
 *   description="The custom prefix that this guild has set",
 *   example="db!"
 * ),
 * @OA\Property(
 *   property="autorole",
 *   type="boolean",
 *   description="If this guild has the autorole feature enabled",
 *   example=true
 * ),
 * @OA\Property(
 *   property="enableJoinMessage",
 *   type="boolean",
 *   description="If the join/leave messages should be enabled for this guild",
 *   example=true
 * ),
 * @OA\Property(
 *   property="enableSwearFilter",
 *   type="boolean",
 *   description="If this guild has the swear filter enabled",
 *   example=true
 * ),
 * @OA\Property(
 *   property="autoDehoist",
 *   type="boolean",
 *   description="If this guild has the auto dehoist feature enabled",
 *   example=true
 * ),
 * @OA\Property(
 *   property="filterInvites",
 *   type="boolean",
 *   description="If this guild has the filter invites feature enabled",
 *   example=true
 * ),
 * @OA\Property(
 *   property="announceNextTrack",
 *   type="boolean",
 *   description="If the guild has the announcing of the next playing track enabled",
 *   example=true
 * ),
 * @OA\Property(
 *   property="customWelcomeMessage",
 *   type="string",
 *   description="The custom welcome message for this guild",
 *   example="Welcome {atuser}"
 * ),
 * @OA\Property(
 *   property="customLeaveMessage",
 *   type="string",
 *   description="The custom leave message for this guild",
 *   example="{user}#{discrim} has left us :("
 * ),
 * @OA\Property(
 *   property="serverDesc",
 *   type="string",
 *   description="The custom description of this server",
 *   example="My cool server"
 * ),
 * @OA\Property(
 *   property="logChannelId",
 *   type="string",
 *   description="The id of the modlog channel",
 *   example="1"
 * ),
 * @OA\Property(
 *   property="welcomeLeaveChannel",
 *   type="string",
 *   description="The id of the channel to send welcome/leave messages in",
 *   example="1"
 * ),
 * @OA\Property(
 *   property="spamFilterState",
 *   type="boolean",
 *   description="If the spamfilter should be enabled",
 *   example=true
 * ),
 * @OA\Property(
 *   property="kickInsteadState",
 *   type="boolean",
 *   description="If we should kick members instead of muting them with the spamfilter",
 *   example=true
 * ),
 * @OA\Property(
 *   property="muteRoleId",
 *   type="string",
 *   description="The id of the role that muted users get",
 *   example="1"
 * ),
 * @OA\Property(
 *   property="ratelimits",
 *   type="string",
 *   description="The ratelimits for the spam duration",
 *   example="0|0|0|0|0"
 * ),
 * @OA\Property(
 *   property="blacklisted_words",
 *   type="string[]",
 *   description="The array that contains the blaclisted words",
 *   example="['hello', 'world']"
 * ),
 * @OA\Property(
 *   property="spam_threshold",
 *   type="integer",
 *   description="The amount of messages that a user must has send before we start moderating",
 *   example=7
 * ),
 * @OA\Property(
 *   property="leave_timeout",
 *   type="integer",
 *   description="Timeout in seconds to check if there are still members in a voice channel after an update came in",
 *   example=1
 * ),
 */
class GuildSetting extends BotModelBase
{
    protected $table = 'guildSettings';

    public function blacklistedWords(): HasMany
    {
        return $this->hasMany(GuildBlacklist::class, 'guild_id', 'guildId');
    }

    public function warnActions(): HasMany
    {
        return $this->hasMany(WarnAction::class, 'guild_id', 'guildId');
    }

    public function getRouteKeyName(): string
    {
        return 'guildId';
    }
}
