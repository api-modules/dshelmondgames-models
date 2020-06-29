<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class Ban.
 *
 * @property integer        id
 * @property string         guildId
 * @property string         modUserId
 * @property string         userId
 * @property string         username
 * @property string         disciminator
 * @property \Carbon\Carbon ban_date
 * @property \Carbon\Carbon unban_date
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Ban")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The id of this ban",
 *   example=1
 * ),
 * @OA\Property(
 *   property="guildId",
 *   type="string",
 *   description="The id of the guild that this ban was in",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="modUserId",
 *   type="string",
 *   description="The id of the user that created the ban",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="userId",
 *   type="string",
 *   description="The id of the user that got banned",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="username",
 *   type="string",
 *   description="The name of the user that got banned (for modlogs)",
 *   example="duncte123"
 * ),
 * @OA\Property(
 *   property="disciminator",
 *   type="string",
 *   description="The discriminator of the user that got banned (for modlogs)",
 *   example="1245"
 * ),
 * @OA\Property(
 *   property="ban_date",
 *   type="datetime",
 *   description="The date of when the user got banned",
 *   example="2019-01-09 09:19:52"
 * ),
 * @OA\Property(
 *   property="unban_date",
 *   type="datetime",
 *   description="The date of when we should unban the user",
 *   example="2020-02-22 09:19:52"
 * ),
 */
class Ban extends BotModelBase
{

    protected $dates = [
        'ban_date',
        'unban_date',
    ];

}
