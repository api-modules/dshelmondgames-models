<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CustomCommand.
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="CustomCommand")
 * )
 *
 * @OA\Property(
 *   property="id",
 *   type="integer",
 *   description="The uniqe id of this item",
 *   example=1
 * ),
 * @OA\Property(
 *   property="guildId",
 *   type="string",
 *   description="The id of the guild that owns this command",
 *   example="191245668617158656"
 * ),
 * @OA\Property(
 *   property="invoke",
 *   type="string",
 *   description="The name of the command that the user has to call",
 *   example="hello"
 * ),
 * @OA\Property(
 *   property="message",
 *   type="string",
 *   description="the response of the command",
 *   example="Hello World"
 * ),
 * @OA\Property(
 *   property="autoresponse",
 *   type="boolean",
 *   description="If this command is an autoresponse",
 *   example=true
 * ),
 *
 */
class CustomCommand extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'customCommands';

    protected $casts = [
        'autoresponse' => 'boolean'
    ];
}
