<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class AnimalApi.
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

    public static function targetLlama(): Builder
    {
        return self::where('api', 'llama');
    }

    public function getFileAttribute($value): String
    {
        return str_cdnPrefix($value);
    }

}
