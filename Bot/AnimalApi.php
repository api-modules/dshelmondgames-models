<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class AnimalApi.
 *
 * @property integer id
 * @property string  file
 * @property string  api
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="AnimalApi")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The animal id",
 *   example=1
 * ),
 * @OA\Property(
 *   property="file",
 *   type="string",
 *   description="The the location of the image",
 *   example="https://example.com/example.png"
 * )
 */
class AnimalApi extends BotModelBase
{
    protected $hidden = [
        'api',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getFileAttribute($value): String
    {
//        return str_cdnPrefixInt($this->id);
        return str_cdnPrefixInt($this->id, 'AN-');
    }

}
