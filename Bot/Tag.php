<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 *
 * @package App\Models\Bot
 *
 * @property integer id
 * @property string  owner_id
 * @property string  name
 * @property string  content
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Tag")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The uniqe id of this item",
 *   example=9
 * ),
 * @OA\Property(
 *   property="owner_id",
 *   type="string",
 *   description="The id of the user that created this tag",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="name",
 *   type="string",
 *   description="The unique name of this tag",
 *   example="cheese"
 * ),
 * @OA\Property(
 *   property="content",
 *   type="string",
 *   description="The content of this tag",
 *   example="Hello World!"
 * ),
 */
class Tag extends BotModelBase
{
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
