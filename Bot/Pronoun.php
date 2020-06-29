<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;

/**
 * Class Pronoun.
 *
 * @property string  user_id
 * @property string  pronouns
 * @property boolean singular
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Pronoun")
 * )
 *
 * @OA\Property(
 *   property="user_id",
 *   type="string",
 *   description="The id of the user that this pronoun is for",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="pronouns",
 *   type="string",
 *   description="The pronouns of this user",
 *   example="he/him/his/his"
 * ),
 * @OA\Property(
 *   property="singular",
 *   type="boolean",
 *   description="If this pronoun is singular",
 *   example=true
 * ),
 */
class Pronoun extends BotModelBase
{
    protected $primaryKey = 'user_id';

    protected $casts = [
        'singular' => 'boolean',
    ];
}
