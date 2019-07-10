<?php

namespace App\Models;
/**
 * Class Reminder
 *
 * @package App\Models
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

}