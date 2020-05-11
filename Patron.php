<?php

namespace App\Models;

/**
 * Class Patron
 *
 * @package App\Models
 *
 * @property string                user_id
 * @property string                guild_id
 * @property \App\Enums\PatronType type
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Patron")
 * )
 *
 * @OA\Property(
 *   property="user_id",
 *   type="string",
 *   description="The id of the user that is a patreon",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="guild_id",
 *   type="string",
 *   description="The id of the guild that should get patreon features",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="type",
 *   type="string",
 *   description="The type of the patron",
 *   enum={"NORMAL", "TAG", "ONE_GUILD", "ALL_GUILD"},
 *   example="TAG"
 * ),
 */
class Patron extends BotModelBase
{
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
