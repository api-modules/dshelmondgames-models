<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class Mute.
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Mute")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The id of this mute",
 *   example=1
 * ),
 * @OA\Property(
 *   property="guild_id",
 *   type="string",
 *   description="The id of the guild that this mute was in",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="mod_id",
 *   type="string",
 *   description="The id of the user that created the mute",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="user_id",
 *   type="string",
 *   description="The id of the user that got muted",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="user_tag",
 *   type="string",
 *   description="The name#discrim of the user that got muted (for modlogs)",
 *   example="duncte123#1245"
 * ),
 * @OA\Property(
 *   property="mute_date",
 *   type="datetime",
 *   description="The date of when the user got muted",
 *   example="2019-01-09 09:19:52"
 * ),
 * @OA\Property(
 *   property="unmute_date",
 *   type="datetime",
 *   description="The date of when we should unmute the user",
 *   example="2020-02-22 09:19:52"
 * ),
 */
class Mute extends BotModelBase
{
    protected $dates = [
        'mute_date',
        'unmute_date',
    ];
}
