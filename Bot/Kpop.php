<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class Kpop.
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Kpop")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The id of the member",
 *   example=1
 * ),
 * @OA\Property(
 *   property="img",
 *   type="string",
 *   description="The the location of the image",
 *   example="https://example.com/example.png"
 * ),
 * @OA\Property(
 *   property="name",
 *   type="string",
 *   description="The name of the member",
 *   example="Taeyong"
 * ),
 * @OA\Property(
 *   property="band",
 *   type="string",
 *   description="The name of the group the the member is in",
 *   example="NCT 127 & NCT U"
 * )
 */
class Kpop extends BotModelBase
{
    protected $table = 'kpop';

    public function getImgAttribute($value): String
    {
        return str_cdnPrefix($value);
    }
}
