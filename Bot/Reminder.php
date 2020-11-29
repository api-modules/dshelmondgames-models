<?php

namespace App\Models\Bot;
use App\Models\BotModelBase;

/**
 * Class Reminder
 *
 * @package App\Models\Bot
 *
 * @property string                     user_id
 * @property string                     channel_id
 * @property string                     reminder
 * @property \Illuminate\Support\Carbon remind_create_date
 * @property \Illuminate\Support\Carbon remind_date
 *
 * @OA\Schema(
 *   type="object",
 *   @OA\Xml(name="Reminder")
 * )
 *
 * @OA\Property(
 *   property="user_id",
 *   type="string",
 *   description="The id of the user that created the reminder",
 *   example="191231307290771456"
 * ),
 * @OA\Property(
 *   property="channel_id",
 *   type="string",
 *   description="The id of the channel that we should remind in",
 *   example="191245668617158657"
 * ),
 * @OA\Property(
 *   property="message_id",
 *   type="string",
 *   description="The id of the message that was typed to create this reminder",
 *   example="191245668617158657"
 * ),
 * @OA\Property(
 *   property="in_channel",
 *   type="boolean",
 *   description="Set to true if we want to remind in the channel instead of in the user's dms",
 *   example=false
 * ),
 * @OA\Property(
 *   property="reminder",
 *   type="string",
 *   description="The actual reminder",
 *   example="Clean your room"
 * ),
 * @OA\Property(
 *   property="remind_date",
 *   type="datetime",
 *   description="The date when we should remind the person of this reminder",
 *   example="2020-02-22 09:19:52"
 * ),
 * @OA\Property(
 *   property="remind_create_date",
 *   type="datetime",
 *   description="Creation date of this reminder, useful for tracking the creation time",
 *   example="2020-02-22 09:19:52"
 * ),
 *
 */
class Reminder extends BotModelBase
{
    protected $dates = [
        'remind_date',
        'remind_create_date',
        'created_at',
        'updated_at',
    ];
}
