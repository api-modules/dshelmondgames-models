<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OneGuildPatron.
 *
 * @property string user_id
 * @property string guild_id
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="OneGuildPatron")
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
 */
class OneGuildPatron extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'oneGuildPatrons';
    protected $primaryKey = 'user_id';

    protected $casts = [
        'user_id' => 'string',
        'guild_id' => 'string',
    ];
}
