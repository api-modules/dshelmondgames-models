<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmbedSetting.
 *
 * @property string  guild_id
 * @property integer embed_color
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="EmbedSetting")
 * )
 *
 * @OA\Property(
 *   property="guild_id",
 *   type="string",
 *   description="The uniqe id of this item that also holds the id of the target guild",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="embed_color",
 *   type="integer",
 *   description="The custom color for the embed",
 *   example=1
 * ),
 */
class EmbedSetting extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'embedSettings';
    protected $primaryKey = 'guild_id';

    protected $casts = [
        'guild_id' => 'string',
        'embed_color' => 'integer',
    ];
}
