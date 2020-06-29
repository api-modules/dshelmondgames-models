<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class Warning.
 *
 * @property integer        id
 * @property string         mod_id
 * @property string         guild_id
 * @property string         user_id
 * @property string         reason
 * @property \Carbon\Carbon warn_date
 * @property \Carbon\Carbon expire_date
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Warning")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The id of this warning",
 *   example=1
 * ),
 * @OA\Property(
 *   property="mod_id",
 *   type="string",
 *   description="The id of the user that created the warning",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="guild_id",
 *   type="string",
 *   description="The id of the guild that the warning is in",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="user_id",
 *   type="string",
 *   description="The id of the user that got warned",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="reason",
 *   type="string",
 *   description="The reason of the warning",
 *   example="Too handsome"
 * ),
 * @OA\Property(
 *   property="warn_date",
 *   type="datetime",
 *   description="The date of when the user got warned",
 *   example="2019-01-09 09:19:52"
 * ),
 * @OA\Property(
 *   property="expire_date",
 *   type="datetime",
 *   description="The date when this warning will expire",
 *   example="2020-02-22 09:19:52"
 * ),
 */
class Warning extends BotModelBase
{

    protected $dates = [
        'warn_date',
        'expire_date',
    ];

}
