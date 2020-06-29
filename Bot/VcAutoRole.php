<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class VcAutoRole.
 *
 * @property string guild_id
 * @property string voice_channel_id
 * @property string role_id
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="VcAutoRole")
 * )
 *
 * @OA\Property(
 *   property="guild_id",
 *   type="string",
 *   description="The uniqe id of this item that also holds the id of the target guild",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="voice_channel_id",
 *   type="string",
 *   description="The unique id of a voice channel that we should target",
 *   example="191245668617158657"
 * ),
 * @OA\Property(
 *   property="role_id",
 *   type="string",
 *   description="The unique id of a role that we should apply",
 *   example="454246472385298432"
 * ),
 */
class VcAutoRole extends BotModelBase
{

}
